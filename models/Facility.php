<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facilities".
 *
 * @property int $id
 * @property string $name
 * @property string $comment
 */
class Facility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facilities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 64],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'comment' => Yii::t('app', 'Comment'),
        ];
    }

    /**
     * @return array
     */
    public static function getArrayIdToName()
    {
        $result = [];
        foreach (self::find()->all() as $facility) {
            $result[$facility->id] = $facility->name;
        }
        return $result;
    }

    /**
     * @param $name
     * @return null|static
     */
    public static function getByName($name)
    {
        return self::findOne(['name' => $name]);
    }
}
