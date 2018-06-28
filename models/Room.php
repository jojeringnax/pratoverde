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
    public static function getAllIdsForNumbers()
    {
        return self::find()->select('id')->asArray()->all();
    }
}
