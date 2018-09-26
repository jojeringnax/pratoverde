<?php

namespace app\models\menu;

use Yii;

/**
 * This is the model class for table "ingridients_types".
 *
 * @property int $id
 * @property string $name
 *
 * @property Ingredient[] $ingridients
 */
class IngredientsType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingridients_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
            [['name'], 'unique']
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngridients()
    {
        return $this->hasMany(Ingredient::className(), ['type_id' => 'id']);
    }
}
