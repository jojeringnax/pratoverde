<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quantity_of_ingridients_in_dishes".
 *
 * @property int $id
 * @property int $dish_id
 * @property int $ingridient_id
 * @property int $quantity
 * @property string $unit
 *
 * @property Dish $dish
 * @property Ingredient $ingridient
 */
class QuantityOfIngridientsInDishes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quantity_of_ingridients_in_dishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dish_id', 'ingridient_id', 'quantity'], 'integer'],
            [['unit'], 'string', 'max' => 5],
            [['dish_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dish::className(), 'targetAttribute' => ['dish_id' => 'id']],
            [['ingridient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingridient_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'dish_id' => Yii::t('app', 'Dish ID'),
            'ingridient_id' => Yii::t('app', 'Ingridient ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'unit' => Yii::t('app', 'Unit'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDish()
    {
        return $this->hasOne(Dish::className(), ['id' => 'dish_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngridient()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingridient_id']);
    }

    /**
     * @param $dish_id
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAllForADish($dish_id)
    {
        $quantities = self::find()->where(['dish_id' => $dish_id])->all();
        if($quantities !== null) {
            foreach($quantities as $quantity) {
                $result[] = array(
                    'ingridient' => $quantity->ingridient->name,
                    'quantity' => $quantity->quantity
                );
            }
            return $result;
        };
        return null;
    }
}
