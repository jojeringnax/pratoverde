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
     * @var array
     */
    public static $categories = [
        'Doors/Windows',
        'Floor/Walls/Roof',
        'Furniture',
        'Sanitary'
    ];

    /**
     * @var array
     */
    public static $places = [
        'Room',
        'Toilet'
    ];

    /**
     * @var array
     */
    public static $statuses = [
        'New Problem',
        'In progress',
        'Solved'
    ];

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
            'category' => 'Category',
            'place' => 'Place',
            'comment' => 'Comment',
            'room_id' => 'Room ID',
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
     * @return string
     */
    public function getTextStatus()
    {
        if (!in_array($this->status, range(0,count(self::$statuses)-1)) || $this->status === null) {
            return null;
        }
        return self::$statuses[$this->status];
    }

    /**
     * @return string
     */
    public function getTextCategory()
    {
        if (!in_array($this->category, range(0, count(self::$categories)-1)) || $this->category === null) {
            return null;
        }
        return self::$categories[$this->category];
    }

    /**
     * @return string
     */
    public function getTextPlace()
    {
        if (!in_array($this->place, range(0, count(self::$places)-1)) || $this->place === null) {
            return null;
        }
        return self::$places[$this->category];
    }

    public function getRoomNumber()
    {
        if (!is_integer($this->room_id)) {
            return null;
        }
        return $this->room->number;
    }

    /**
     *
     * Setters
     *
     */

    public function setTextCategory($category)
    {

    }

    public function setTextPlace($place)
    {
        $this->textPlace = $place;
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
