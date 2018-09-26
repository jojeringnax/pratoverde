<?php

/* @var $dish \app\models\menu\Dish */
/* @var $this \yii\web\View */
/* @var $ingredient \app\models\menu\Ingredient */
/* @var $dishType \app\models\menu\DishesType */
/* @var $ingredientType \app\models\menu\IngredientsType */
/* @var $allIngredients \app\models\menu\Ingredient[] | null */

$this->registerJsFile('js/menu.js');
$this->registerCssFile('css/menu.css');


?>

<div class="dish-form">
    <?php $form = \yii\widgets\ActiveForm::begin(); ?>

    <?= $form->field($dish, 'name')->textInput() ?>

    <?= $form->field($dish, 'cooking_time')->input('number') ?>

    <?= $form->field($dish, 'description')->textarea([
            'style' => 'max-width: 100%;'
    ]) ?>

    <?= $form->field(new \app\models\Photo(), 'file')->fileInput() ?>

    <?php \yii\widgets\Pjax::begin() ?>
    <div class="ingredients_wrapper">
            <?php if($allIngredients !== null) {
                foreach($allIngredients as $ingredient) { ?>
                    <div class="head_of_ingridients flex">
                        <div class="head_ingridient" id="name"><?= Yii::t('app', 'Ingredient name') ?></div>
                        <div class="quantity_unit_wrapper flex">
                            <div class="head_ingridient" id="quantity"><?= Yii::t('app', 'Quantity') ?></div>
                            <div class="head_ingridient" id="unit"><?= Yii::t('app', 'Unit') ?></div>
                        </div>
                    </div>

                    <div class="body_of_ingridients flex">
                        <div class="ingredient"><?= $ingredient->name ?></div>
                        <div class="quantity_unit_wrapper flex">
                            <input class="quantity" value="0" type="number" style="width: 60px;" disabled />
                            <input class="unit" value="gr" type="text" style="width: 60px;" disabled />
                        </div>
                    </div>
                <?php }
            }; ?>
    </div>

    <select style="width: 100%;" id="ingredients" name="ingredients" multiple disabled></select>
    <?php \yii\widgets\Pjax::end() ?>
    <?php $form::end() ?>
</div>


