<?php

/**
 * @var $type string
 * @var $availableRooms \app\models\Room | \app\models\Room[]
 * @var $roomTypes array
 */

$this->title = Yii::t('app', 'Book Room in Hotel Prato Verde Polinago');
$this->registerCssFile('/css/room.css', ['depends' => [\app\assets\AppAsset::className()]]);
?>

    <header id="head" style="padding-top: 180px;">
        <div class="flex wrapper_nav">
            <div class="flex">
                <div class="nav" id="back"><a href="/room" class="navigation"><span class="glyphicon glyphicon-arrow-left"></span></a></div>
                <div class="nav" id="label">book room</div>
                <div class="nav" id="label"><?= $type ?></div>
            </div>
            <div class="nav" id="arrow"><a href="#head" class="navigation"><span class="glyphicon">&#xe093;</span></a></div>
        </div>
        <div class="header_right" id="logo" data-page="book" style="position: fixed; top: 70px; right: 20px;">
            <a href="/"><img src="/img/logo.png" height="160px"/></a>
        </div>
        <div class="menu-small">
            <div class="line" style="border-bottom: 3px solid black;"></div>
            <div class="line" id="last" style="border-bottom: 3px solid black; border-top: 3px solid black;"></div>
        </div>
    </header>
    <?php $form = \yii\widgets\ActiveForm::begin() ?>
    <div class="flex">
        <div class="check_wrapper flex column" id="checkin">
            <div class="check_label" id="checkin"><?= Yii::t('app','check-in') ?></div>
            <div class="check_calendar" id="checkin"></div>
            <select class="check_select room_number" id="checkin">
                <option value="1">1 <?= Yii::t('app','Room') ?></option>
                <?php
                for ($i=2;$i <= count($availableRooms);$i++) {
                ?>;
                <option value="<?= $i ?>"><?= $i.' '.Yii::t('app', 'Rooms') ?></option>
                <?php } ?>
            </select>
            <div class="flex book_checkboxes" id="checkin">
                <label for="children"><?= Yii::t('app','children')?> X</label>
                <input type="number" max="3" min="0" value="0" placeholder="0"/>
            </div>
        </div>
        <div class="check_wrapper flex column" id="checkout">
            <div class="check_label" id="checkout"><?= Yii::t('app','check-out') ?></div>
            <div class="check_calendar" id="checkout"></div>
            <div class="flex check_select_wrapper">
                <select name="Booking[type]" class="check_select room_type" id="checkout">
                    <?php foreach ($roomTypes as $key => $type) { ?>
                        <option value="<?= $key ?>" <?= Yii::$app->request->get('type') == $type ? 'selected' : ''?> ><?= Yii::t('app',$type) ?></option>
                    <?php } ?>
                </select>
                <div class="delete btn btn-danger">-</div>
            </div>
            <div class="flex book_checkboxes" id="checkout">
                <label for="pets"><?= Yii::t('app','pets')?> X</label>
                <input type="number" max="2" min="0" value="0" placeholder="0"/>
            </div>
        </div>
    </div><!--
    <div class="flex" style="align-items: center;justify-content: center;">
        <div class="add_room btn btn-success"><?/*= Yii::t('app','Add a room') */?></div>
    </div>-->
    <div class="flex wrapper_check_submit">
        <?= \yii\helpers\Html::submitButton(Yii::t('app','book'),['class' => 'check_submit']) ?>
    </div>
    <?php $form::end() ?>