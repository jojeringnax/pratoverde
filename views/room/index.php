<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Book Room in Hotel Prato Verde Polinago');
$this->registerCssFile('/css/room.css', ['depends' => [\app\assets\AppAsset::className()]]);
?>

<header id="head">
    <div class="flex wrapper_nav">
        <div class="nav" id="label">book room</div>
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
        <div class="flex column">
            <div class="room" id="photo">
                <img src="/img/room/singolo.jpg" width="100%" />
            </div>
            <div class="flex room" id="label">
                <?= Yii::t('app','single room') ?>
            </div>
            <div class="flex room" id="facilities">
                <div class="flex column">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="quantity_of_guests">3 - 5 <?= Yii::t('app','persons') ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
