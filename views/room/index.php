<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Book Room in Hotel Prato Verde Polinago');
$this->registerCssFile('/css/room.css', ['depends' => [\app\assets\AppAsset::className()]]);
?>

<header id="head">
    <div class="flex wrapper_nav">
        <div class="flex">
            <div class="nav" id="back"><a href="/" class="navigation"><span class="glyphicon glyphicon-arrow-left"></span></a></div>
            <div class="nav" id="label">book room</div>
        </div>
            <div class="nav" id="arrow"><a href="#head" class="navigation"><span class="glyphicon">&#xe093;</span></a></div>
    </div>
    <div class="header_right flex" id="logo">
        <img src="/img/logo.png" height="160px"/>
    </div>
    <div class="menu-small">
        <div class="line" style="border-bottom: 3px solid black;"></div>
        <div class="line" id="last" style="border-bottom: 3px solid black; border-top: 3px solid black;"></div>
    </div>
</header>
<section id="rooms">
    <div class="flex rooms">
        <div class="flex column" id="room">
            <div class="room" id="photo">
                <img src="/img/room/singolo.jpg" width="100%" />
            </div>
            <div class="flex room" id="label">
                <?= Yii::t('app','single room') ?>
            </div>
            <?= \yii\helpers\Html::a(
                    Yii::t('app', 'book now'),
                    \yii\helpers\Url::to(['room/book', 'type' => 'single']),
                    ['class' => 'flex room', 'id' => 'book_button']) ?>
            <div class="flex room" id="facilities">
                <div class="flex column">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="quantity_of_guests">1 - 3 <?= Yii::t('app','persons') ?></span>
                </div>
                <div class="flex">
                    <div class="flex column">
                        <span class="glyphicon glyphicon-leaf"></span>
                        <span class="quantity_of_guests"><?= Yii::t('app','bathtub') ?></span>
                    </div>
                    <div class="flex">
                        <span class="glyphicon glyphicon-triangle-left"></span>
                        <span class="glyphicon glyphicon-triangle-right"></span>
                    </div>
                    <div class="flex column">
                        <span class="glyphicon glyphicon-fire"></span>
                        <span class="quantity_of_guests"><?= Yii::t('app','shower') ?></span>
                    </div>
                </div>
                <div class="flex column">
                    <span class="glyphicon glyphicon-signal"></span>
                    <span class="quantity_of_guests"><?= Yii::t('app','Wi-Fi') ?></span>
                </div>
            </div>
        </div>
        <div class="flex column" id="room">
            <div class="room" id="photo">
                <img src="/img/room/matrimoniale.jpg" width="100%" />
            </div>
            <div class="flex room" id="label">
                <?= Yii::t('app','double room') ?>
            </div>
            <?= \yii\helpers\Html::a(
                Yii::t('app', 'book now'),
                \yii\helpers\Url::to(['room/book', 'type' => 'double']),
                ['class' => 'flex room', 'id' => 'book_button']) ?>
            <div class="flex room" id="facilities">
                <div class="flex column">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="quantity_of_guests">2 - 3 <?= Yii::t('app','persons') ?></span>
                </div>
                <div class="flex">
                    <div class="flex column">
                        <span class="glyphicon glyphicon-leaf"></span>
                        <span class="quantity_of_guests"><?= Yii::t('app','bathtub') ?></span>
                    </div>
                    <div class="flex">
                        <span class="glyphicon glyphicon-triangle-left"></span>
                        <span class="glyphicon glyphicon-triangle-right"></span>
                    </div>
                    <div class="flex column">
                        <span class="glyphicon glyphicon-fire"></span>
                        <span class="quantity_of_guests"><?= Yii::t('app','shower') ?></span>
                    </div>
                </div>
                <div class="flex column">
                    <span class="glyphicon glyphicon-signal"></span>
                    <span class="quantity_of_guests"><?= Yii::t('app','Wi-Fi') ?></span>
                </div>
            </div>
        </div>
        <div class="flex column" id="room">
            <div class="room" id="photo">
                <img src="/img/room/matrimoniale.jpg" width="100%" />
            </div>
            <div class="flex room" id="label">
                <?= Yii::t('app','family room') ?>
            </div>
            <?= \yii\helpers\Html::a(
                Yii::t('app', 'book now'),
                \yii\helpers\Url::to(['room/book', 'type' => 'family']),
                ['class' => 'flex room', 'id' => 'book_button']) ?>
            <div class="flex room" id="facilities">
                <div class="flex column">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="quantity_of_guests">3 - 5 <?= Yii::t('app','persons') ?></span>
                </div>
                <div class="flex column">
                    <span class="glyphicon glyphicon-leaf"></span>
                    <span class="quantity_of_guests"><?= Yii::t('app','bathtub') ?></span>
                </div>
                <div class="flex column">
                    <span class="glyphicon glyphicon-signal"></span>
                    <span class="quantity_of_guests"><?= Yii::t('app','Wi-Fi') ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
