<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Problem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->dropDownList(\app\models\Problem::$categories) ?>

    <?= $form->field($model, 'place')->dropDownList(\app\models\Problem::$places) ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_id')->label('Room number')->dropDownList(\app\models\Room::getAllNumbers()) ?>

    <?= $form->field($model, 'status')->dropDownList([
        0 => ['label' => 'New Problem'],
        1 => ['label' => 'In progress'],
        2 => ['label' => 'Solved']
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
