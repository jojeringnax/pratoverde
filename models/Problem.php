<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "problems".
 *
 * @property int $id
 * @property string $category
 * @property string $place
 * @property string $comment
 * @property int $room_id
 * @property string $status
 *
 * @property Room $room
 */
class Problem extends ActiveRecord
{
    /**
     * @var string
     */
    public $textCategory;

    /**
     * @var string
     */
    public $textPlace;

    /**
     * @var string
     */
    public $textStatus;

    /**
     * @var integer
     */
    public $roomNumber;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'problems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'place', 'comment'], 'string'],
            [['status', 'category', 'place', 'comment'], 'required'],
            [['room_id'], 'integer'],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => \Yii::t('app','Category'),
            'place' => \Yii::t('app', 'Place'),
            'comment' => \Yii::t('app','Comment'),
            'room_id' => \Yii::t('app', 'Room').' ID',
        ];
    }

    /**
     *
     * Getters
     *
     */

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['problem_id' => 'id']);
    }


    /**
     * @return string
     */
    public function getTextStatus()
    {
        return $this->getTranslatedParams()['problemStatuses'][(integer) $this->status];
    }

    /**
     * @return string
     */
    public function getTextCategory()
    {
        return $this->getTranslatedParams()['problemCategories'][(integer) $this->category];
    }

    /**
     * @return string
     */
    public function getTextPlace()
    {
        return $this->getTranslatedParams()['problemPlaces'][(integer) $this->category];
    }

    public function getRoomNumber()
    {
        if (!is_integer($this->room_id)) {
            return null;
        }
        return $this->room->number;
    }

    /**
     * @param null $roomId
     * @return $this|array|ActiveRecord[]
     */
    public static function getUnresolvedProblems($roomId=null)
    {
        return $roomId === null ?
            self::find()->where(['status' => [1,2]])->all() :
            self::find()->where(['status' => [1,2], 'room_id' => $roomId])->all();
    }


}
