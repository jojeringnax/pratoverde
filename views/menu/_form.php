<?php
/* @var $dish \app\models\Dish */
?>

<div class="dish-form">
    <?php $form = \yii\widgets\ActiveForm::begin(); ?>

    <?= $form->field($dish, 'name')->textInput() ?>


