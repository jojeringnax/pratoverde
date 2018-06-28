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
    public static $categories = [
        'Doors/Windows',
        'Floor/Walls/Roof',
        'Furniture',
        'Sanitary'
    ];

    public static $places = [
        'Room',
        'Toilet'
    ];

    public static $statuses = [
      0
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
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
