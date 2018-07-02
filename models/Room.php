<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property int $id
 * @property int $number
 * @property string $type
 * @property string $comment
 */
class Room extends \yii\db\ActiveRecord
{

    /**
     * @var array
     */
    public static $types;

    /**
     * @var int
     */
    public $countProblems;

    /**
     * @var string
     */
    public $textType;

    /**
     * Room constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->textType = $this->getTranslatedParams()['roomTypes'][(integer) $this->type];
        $this->countProblems = $this->getCountProblems();
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'required'],
            [['number'], 'integer'],
            [['comment'], 'string', 'max' => 255],
            [['number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => Yii::t('app', 'Number'),
            'type' => Yii::t('app', 'Type'),
            'comment' => Yii::t('app', 'Comment'),
        ];
    }


    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAllNumbers()
    {
        foreach (Room::find()->all() as $room) {
            $result[$room->id] = $room->number;
        }
        return isset($result) ? $result : [];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProblems()
    {
       return $this->hasMany(Problem::className(), ['room_id' => 'id']);
    }

    /**
     * @return int
     */
    public function getCountProblems()
    {
        return count($this->problems);
    }

    /**
     * @return string
     */
    public function getTextType()
    {
       return $this->textType;
    }
}
