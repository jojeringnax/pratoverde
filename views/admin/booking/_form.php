<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
/* @var $roomId integer */
/* @var $customers \app\models\Customer[] */

?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'total_price')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= !empty($customers) ? $form->field($model, 'customer_id')->dropDownList($customers) : '<button class="btn-success new_customer">New Customer</button>' ?>

    <?= $form->field($model, 'date', [
        'class' => 'app\components\ActiveField',
        'errorOptions' => ['encode' => false]
    ])->calendarInput() ?>

    <?= $form->field($model, 'room_id')->label(Yii::t('app','Room number'))->dropDownList(\app\models\Room::getAllNumbers(), ['value' => $roomId, 'disabled' => isset($roomId)]) ?>

    <?= $form->field($model, 'meal_plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_guests')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_children')->textInput() ?>

    <?= $form->field($model, 'number_of_nights')->textInput() ?>

    <?= $form->field($model, 'addons')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
