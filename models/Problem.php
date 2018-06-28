<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "problems".
 *
 * @property int $id
 * @property string $category
 * @property string $place
 * @property string $comment
 * @property int $room_id
 *
 * @property Rooms $room
 */
class Problem extends \yii\db\ActiveRecord
{
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
            [['room_id'], 'integer'],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['room_id' => 'id']],
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
        return $this->hasOne(Rooms::className(), ['id' => 'room_id']);
    }
}
