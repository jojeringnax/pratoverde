<?php
/* @var $dish \app\models\menu\Dish */
?>

<div class="dish-form">
    <?php $form = \yii\widgets\ActiveForm::begin(); ?>

    <?= $form->field($dish, 'name')->textInput() ?>

    <?= $form->field($dish, 'cooking_time')->input('number') ?>

    <?= $form->field($dish, 'description')->textarea([
            'style' => 'max-width: 100%;'
    ]) ?>

    <?= $form->field(new \app\models\Photo(), 'file')->fileInput() ?>



    <?php $form::end() ?>
</div>


