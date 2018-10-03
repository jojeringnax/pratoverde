<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerCssFile('css/site.css');
$this->registerJsFile('js/main.js');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <style>

        .container {
            width: 100%;
        }
    </style>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">

    <header id="head">
        <div class="flex header_wrapper">
            <div class="header_left_wrapper flex column" style="align-items: flex-start;">
                <a href="booking" class="book_room_button">book room</a>
                <div class="header_pic"><img id="header_pic" src="img/header_pic.png" /></div>
            </div>
            <div class="header_right" id="logo">
                <img src="img/logo.png" height="160px"/>
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
            <div class="line" style="border-bottom: 1px solid black;"></div>
            <div class="line" id="last" style="border-bottom: 1px solid black; border-top: 1px solid black;"></div>
        </div>
    </header>
    <div class="wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="socials flex">
            <a class="social" id="google"></a>
            <a class="social" id="twitter"></a>
            <a class="social" id="vk"></a>
            <a class="social" id="facebook"></a>
            <a class="social" id="linkedIn"></a>
        </div>
        <div class="flex wrapper_contacts_signup">
            <div class="wrapper_contacts flex column">
                <div class="contacts" id="label">Contacts:</div>
                <div class="contacts flex" id="address">
                    <span class="glyphicon glyphicon-map-marker"></span><!--<img src="img/footer/map.jpg" />-->
                    <div class="address_text">41040, Italy, Polinago(MO), Via Dei Friniati, 11</div>
                </div>
                <div class="contacts flex" id="phone">
                    <span class="glyphicon glyphicon-earphone"></span><!--<img src="img/footer/telefono.jpg" />-->
                    <div class="phone_text">
                        <a href="tel:+39(350)049-25-34"> +39 350 049 2534</a>
                    </div>
                </div>
                <div class="contacts flex" id="email">
                    <span class="glyphicon">&#x2709;</span><!--<img src="img/footer/mail.jpg" />-->
                    <div class="email_text">
                        <a href="mailto: hollow718@gmail.com">hollow718@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="wrapper_signup flex column">
                <div class="signup" id="label">Sign our news:</div>
                <div class="signup" id="submit"></div>
                <img  src="img/footer/gatto.png" class="signup" id="cat" />
            </div>
        </div>
        <p class="pull-left">&copy; Risthotel Prato Verde <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
