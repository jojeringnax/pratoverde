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

    public $countProblems;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
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
            [['type', 'comment'], 'string', 'max' => 255],
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
            'number' => 'Number',
            'type' => 'Type',
            'comment' => 'Comment',
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
}
