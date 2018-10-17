<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "rooms".
 *
 * @property int $id
 * @property int $number
 * @property int $type
 * @property string $comment
 * @property string $facilities
 * @property int $smoking
 * @property string $state
 * @property int $room_view_photo_id
 * @property int $toilet_view_photo_id
 *
 * @property Booking[] $bookings
 * @property Photo[] $photos
 * @property Problem[] $problems
 * @property Photo $roomViewPhoto
 * @property Photo $toiletViewPhoto
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @var array
     */
    private static $types = [
        'single',
        'double',
        'family'
    ];

    /**
     * @var int
     */
    public $countProblems;

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
            [['number', 'type'], 'required'],
            [['number', 'type', 'smoking', 'room_view_photo_id', 'toilet_view_photo_id'], 'integer'],
            [['comment', 'facilities'], 'string', 'max' => 255],
            [['state'], 'string', 'max' => 16],
            [['number'], 'unique'],
            [['room_view_photo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photo::className(), 'targetAttribute' => ['room_view_photo_id' => 'id']],
            [['toilet_view_photo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photo::className(), 'targetAttribute' => ['toilet_view_photo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'number' => Yii::t('app', 'Number'),
            'type' => Yii::t('app', 'Type'),
            'comment' => Yii::t('app', 'Comment'),
            'facilities' => Yii::t('app', 'Facilities'),
            'smoking' => Yii::t('app', 'Smoking'),
            'state' => Yii::t('app', 'State'),
            'room_view_photo_id' => Yii::t('app', 'Room View Photo ID'),
            'toilet_view_photo_id' => Yii::t('app', 'Toilet View Photo ID'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomViewPhoto()
    {
        return $this->hasOne(Photo::className(), ['id' => 'room_view_photo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToiletViewPhoto()
    {
        return $this->hasOne(Photo::className(), ['id' => 'toilet_view_photo_id']);
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
        return ActiveRecord::getTranslatedParams()['roomTypes'][$this->type];
    }

    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * @return array[]|false|string[]
     */
    public function getFacilitiesIDsAsArray()
    {
         return preg_split('/,/', $this->facilities);

    }

    /**
     * @param $type
     * @return Room|Room[]
     */
    public static function getRoomsForType($type)
    {
        return self::find()->where(['type' => array_search($type, self::$types)])->all();
    }

}
