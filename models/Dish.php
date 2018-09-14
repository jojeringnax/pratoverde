<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dishes".
 *
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $description
 * @property string $special_types
 * @property int $type_id
 *
 * @property DishesType $type
 * @property QuantityOfIngridientsInDishes[] $quantityOfIngridientsInDishes
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['description'], 'string'],
            [['type_id'], 'integer'],
            [['name', 'special_types'], 'string', 'max' => 32],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DishesType::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Yii::t('app', 'Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'description' => Yii::t('app', 'Description'),
            'special_types' => Yii::t('app', 'Special Types'),
            'type_id' => Yii::t('app', 'Type ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(DishesType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuantityOfIngridientsInDishes()
    {
        return $this->hasMany(QuantityOfIngridientsInDishes::className(), ['dish_id' => 'id']);
    }
}
