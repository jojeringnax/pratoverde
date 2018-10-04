<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

if (!empty($model->photos)) {
    $this->registerJsFile('//code.jquery.com/jquery-3.3.1.min.js');

    $this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css');
    $this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js');

    $css = "            
            .thumb img {
                -webkit-filter: grayscale(0);
                filter: none;
                border-radius: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 5px;
            }
     
            .thumb img:hover {
                -webkit-filter: grayscale(1);
                filter: grayscale(1);
            }
     
            .thumb {
                padding: 5px;
            }";

    $this->registerCss($css);
}

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

    <?= $form->field(new \app\models\Photo(), 'file')->fileInput() ?>

    <?php if(isset($model->photos) && $model->photos != null && Yii::$app->controller->action->id == 'update') { ?>
        <?php if(!empty($model->photos)) { ?>
            <div class="row">
                <?php foreach($model->photos as $photo) { ?>
                    <div class="col-lg-3 col-md-4 col-6 thumb">
                        <a data-fancybox="gallery" href="<?= $photo->link_to_photo ?>">
                            <img width="100%" class="img-fluid" src="<?= $photo->link_to_photo ?>" alt="Hotel Prato Verde" />
                        </a>
                    </div>
                <?php }; ?>
            </div>
        <?php } else { ?>
            <div class="row label-info">No photo</div>
        <?php }; ?>
    <?php }; ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app','Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
