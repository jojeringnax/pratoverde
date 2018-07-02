<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Problem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->dropDownList(\yii\db\ActiveRecord::getTranslatedParams()['problemCategories']) ?>

    <?= $form->field($model, 'place')->dropDownList(\yii\db\ActiveRecord::getTranslatedParams()['problemPlaces']) ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_id')->label(Yii::t('app','Room number'))->dropDownList(\app\models\Room::getAllNumbers()) ?>

    <?= $form->field($model, 'status')->dropDownList(\yii\db\ActiveRecord::getTranslatedParams()['problemStatuses']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
