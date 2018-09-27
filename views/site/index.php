<?php

/* @var $this yii\web\View */

$this->title = 'Hotel&Ristorante Prato Verde in Polinago';
?>

<section id="booking_now" class="flex">
    <div class="h1 button"><?= Yii::t('app', 'BOOK NOW') ?></div>
</section>
<section id="restaurant">
    <div class="h1 text-center"><?= Yii::t('app', 'Restaurant') ?></div>
    <div class="flex photos" id="restaurant">
        <!-- TODO: Add Photos -->
    </div>
    <div class="h2 text-center button">MENU</div>
</section>
<section id="blog">
    <div class="h1 text-center">BLOG</div>
    <!-- TODO: Add Blog -->
</section>
<section id="map" class="flex" style="justify-content: space-between">
    <div class="google_map" style="width: 50%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11414.780393176052!2d10.721059949999999!3d44.3367701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59133e826aa7a38a!2sHotel+Prato+Verde!5e0!3m2!1sen!2sit!4v1536774624223" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="text_map" style="width: 45%;">
        <ul class="contacts">
            <li><div class="h3">Hotel Prato Verde</div>
            <li><div class="h4"><?= Yii::t('app', 'Address') ?>: Via Dei Friniati 11</div>
            <li><div class="h4"><?= Yii::t('app', 'Mobile') ?>: <a href="tel:+393500492534">+393500492534</a></div>
            <li><div class="h4">Email: hollow718@gmail.com</div>
        </ul>
    </div>
</section>
<!--
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
-->