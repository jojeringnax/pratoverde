<?php

/* @var $this yii\web\View */
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

$this->title = Yii::t('app','Hotel&Ristorante Prato Verde in Polinago');
?>
<header id="head">
    <div class="flex header_wrapper">
        <div class="header_left_wrapper flex column" style="align-items: flex-start;">
            <a href="room" class="book_room_button">book room</a>
            <div class="header_pic"><img id="header_pic" src="/img/header_pic.png" /></div>
        </div>
        <div class="header_right" id="logo">
            <img src="/img/logo.png" height="160px"/>
        </div>
    </div>
    <div class="flex wrapper_nav">
        <div class="nav" id="empty"></div>
        <div class="nav flex" id="navigation">
            <a class="navigation" id="rooms" href="#booking"><?= Yii::t('app', 'rooms') ?></a>
            <a class="navigation" id="ristorante" href="#restaurant"><?= Yii::t('app', 'restaurant') ?></a>
            <a class="navigation" href="#blog"><?= Yii::t('app', 'blog') ?></a>
            <a class="navigation" id="location" href="#map"><?= Yii::t('app', 'location') ?></a>
        </div>
        <div class="nav" id="arrow"><a href="#head" class="navigation"><span class="glyphicon">&#xe093;</span></a></div>
    </div>
    <div class="menu-small">
        <div class="line" style="border-bottom: 3px solid black;"></div>
        <div class="line" id="last" style="border-bottom: 3px solid black; border-top: 3px solid black;"></div>
    </div>
</header>
<div class="wrapper">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
<section id="greetings">
    <div class="text_greetings">
        Prato Verde <?= Yii::t('app', 'is hotel is for everyone.') ?>
        <br />
        <?= Yii::t('app', ' Athletes and older couples can stay here.') ?>
        <br />
        <?= Yii::t('app','Those who drive a car and those who can not imagine themselves without skiing.') ?>
        <br />
        <?= Yii::t('app', 'This is a place for those who want to relax away from the bustle of the city and those who come on business trips.') ?>
        <br />
        <?= Yii::t('app', 'Here you can sleep, eat in the restaurant or regale pizza, drink a wonderful local Lambrusco or simple tap water.') ?>
        <br />
        <?= Yii::t('app','You can walk, and you can conquer the mountain slopes on a motorcycle.') ?>
        <br />
        <?= Yii::t('app','In our hotel you can be an artist or a bricklayer, you can be a cyclist or a biker.') ?>
        <br />
        <?= Yii::t('app', 'You can be anyone, even a dog traveling with the owners!') ?>
        <br />
        <?= Yii::t('app','Ristohotel Prato Verde is opened for everyone.') ?>
    </div>
    <div class="image_greetings">
        <img src="img/greetings_image.png" />
    </div>
</section>
<section id="booking" class="flex">
    <div class="flex booking">
        <div class="wrapper_booking">
            <div class="flex column">
                <div class="text-center" style="font-weight: bold">
                    <?= Yii::t('app','ROOMs') ?>
                </div>
                <div class="text-center">
                    <?= Yii::t('app','Look and choose') ?>
                </div>
                <div class="button booking">
                    <a href="room" id="booking"><?= Yii::t('app','there') ?> <span style="font-size: 28px;font-weight: bold;">></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="restaurant">
    <div class="flex restaurant" id="first_row">
        <div class="pizzeria flex">
            <a href="menu" class="text-center" id="pizzeria">pizzeria</a>
        </div>
        <div class="chief flex">
            <div class="text-center" id="chief">
                <div class="describe_chief" id="label"><?= Yii::t('app','OUR CHIEF') ?></div>
                <br /><br />
                <div class="describe_chief" id="text">
                    <?= Yii::t('app','Our chief - Emilio Melli.') ?>
                    <br />
                    <?= Yii::t('app','One of the best pizzaiolo in Emilia-Romagna, and maybe in the whole of Italy. But he doesn\'t just cook pizza.') ?>
                    <br />
                    <?= Yii::t('app','His ragú is prepared according to all the laws of the culinary genre, his focaccia is high and fragrant, and tiramisu will make you forget about the troubles and hardships.') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="flex restaurant" id="second_row">
        <div class="menu_working-hours flex column">
            <a href="menu" class="text-center" id="menu">MENU</a>
            <div class="working_hours">
                <?= Yii::t('app','Working hours of restaurant:') ?>
                <br />
                <br />
                <div class="flex">
                    <span><?= Yii::t('app','monday - sunday') ?></span>
                    <span>12:00 - 14:00<br />19:00 - 22:00</span>
                </div>
            </div>
        </div>
        <div class="restaurant_cell flex">
            <a href="menu" class="text-center" id="restaurant"><?= Yii::t('app','restaurant') ?></a>
        </div>
    </div>
    <div class="flex photos" id="restaurant">
        <!-- TODO: Add Photos -->
    </div>
</section>
<section id="blog">
    <div class="flex"  id="blog">
        <div class="blog_cell_wrapper">
            <div class="blog_image" id="building"></div>
            <div class="blog_label" id="building">
                <?= Yii::t('app','Building') ?>
            </div>
            <div class="blog_text" id="building">
                <?= Yii::t('app','Who knew we\'d end up in this place?') ?>
                <br />
                <?= Yii::t('app','But this is where we started a new life.') ?>
            </div>
        </div>
        <div class="blog_cell_wrapper">
            <div class="blog_image" id="we"></div>
            <div class="blog_label" id="we">
                <?= Yii::t('app','We') ?>
            </div>
            <div class="blog_text" id="we">
                <?= Yii::t('app','Who knew we\'d end up in this place?') ?>
                <br />
                <?= Yii::t('app','But this is where we started a new life.') ?>
            </div>
        </div>
        <div class="blog_cell_wrapper">
            <div class="blog_image" id="spring"></div>
            <div class="blog_label" id="spring">
                <?= Yii::t('app','Primavera') ?>
            </div>
            <div class="blog_text" id="spring">
                <?= Yii::t('app','Who knew we\'d end up in this place?') ?>
                <br />
                <?= Yii::t('app','But this is where we started a new life.') ?>
            </div>
        </div>
    </div>
    <div class="flex" id="look_more">
        <a href="blog" class="text-center" id="look_more">
            <?= Yii::t('app','look more') ?>
        </a>
    </div>
</section>
<section id="map" class="flex" style="justify-content: space-between">
    <div class="text_map">
        <div class="text-center" id="we_are_here">
            <?= Yii::t('app','We are here!') ?>
        </div>
        <div class="text-center" id="map_text">
            <?= Yii::t('app','We are located in a place called Polinago, 23 km from Sassuolo and 60 km from Modena.') ?>
            <br />
            <?= Yii::t('app','Our hotel is located in the Central part of Polinago, next to the football stadium.') ?>
            <?= Yii::t('app','Parking is available near the hotel.') ?>
        </div>
        <div class="show_me_the_way">
            <?= Yii::t('app','show me the way') ?> >
        </div>

        <!--<ul class="contacts">
            <li>Hotel Prato Verde
            <li><?/*= Yii::t('app', 'Address') */?>: Via Dei Friniati 11
            <li><?/*= Yii::t('app', 'Mobile') */?>: <a href="tel:+393500492534">+393500492534</a>
            <li>Email: hollow718@gmail.com
        </ul>-->
    </div>
    <div class="google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11414.780393176052!2d10.721059949999999!3d44.3367701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59133e826aa7a38a!2sHotel+Prato+Verde!5e0!3m2!1sen!2sit!4v1536774624223" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>