<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingridients".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $type_id
 *
 * @property IngredientsType $type
 * @property QuantityOfIngridientsInDishes[] $quantityOfIngridientsInDishes
 */
class Ingredient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingridients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['type_id'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => IngredientsType::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'description' => Yii::t('app', 'Description'),
            'type_id' => Yii::t('app', 'Type ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(IngredientsType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuantityOfIngridientsInDishes()
    {
        return $this->hasMany(QuantityOfIngridientsInDishes::className(), ['ingridient_id' => 'id']);
    }
}
