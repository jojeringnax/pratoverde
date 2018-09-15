<?php

namespace app\models\menu;

use Yii;

/**
 * This is the model class for table "dishes".
 *
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property int $cooking_time
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
            [['cooking_time'], 'integer'],
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
            'cooking_time' => Yii::t('app', 'Cooking time'),
            'description' => Yii::t('app', 'Description'),
            'special_types' => Yii::t('app', 'Special types'),
            'type_id' => Yii::t('app', 'Type'),
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

    public function getIngridientsForADish($id)
    {

    }

    /**
     * @param $id
     * @return array
     */
    public function getFullInfoDish($id)
    {
        $dish = $this->findOne($id);
        $quantities = QuantityOfIngridientsInDishes::getAllForADish($id);
        $result = array(
            'dish' => $dish,
            'ingredients' => $quantities !== null ? $quantities : []
        );
        return $result;
    }

    /**
     * @return array
     */
    public static function getAllDishesWithFullInfo()
    {
        $result = [];
        $dishes = self::findAll(true);
        $ingredients = Ingredient::findAll(true);
        $quantities = QuantityOfIngridientsInDishes::findAll(1);
        foreach($dishes as $dish) {
            $dish_id = $dish->id;
            $result[$dish->name] = array(
                'dish' => $dish
            );
            foreach($quantities as $quantity) {
                if($quantity->dish_id == $dish_id) {
                    foreach($ingredients as $ingredient) {
                        if($ingredient->id == $quantity->ingridient_id) {
                            $result[$dish->name]['ingredients'][] = $ingredient->name.' - '.$quantity->quantity.' '.$quantity->unit;
                        }
                    }
                }
            }
        }
        return $result;
    }
}
