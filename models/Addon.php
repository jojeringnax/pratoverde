<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addons".
 *
 * @property int $id
 * @property string $name
 * @property int $nights
 * @property int $persons
 * @property int $price_per_unit
 * @property string $created_at
 */
class Addon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'addons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nights', 'persons', 'price_per_unit'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 64],
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
            'nights' => Yii::t('app', 'Nights'),
            'persons' => Yii::t('app', 'Persons'),
            'price_per_unit' => Yii::t('app', 'Price Per Unit'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
