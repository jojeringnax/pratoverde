<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerCssFile('css/site.css');
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

    <header>
        <div class="flex header_wrapper">
            <div class="header_left_wrapper">
                <div class="book_room_button"></div>
                <div class="header_pic"><img src="img/header_pic.png" height="500px" /></div>
            </div>
            <div class="header_right" id="logo">
                <img src="img/logo.png" height="160px"/>
            </div>
        </div>
        <div class="flex fixed wrapper_nav">
            <div class="nav" id="empty"></div>
            <div class="nav flex" id="navigation">
                <a class="navigation" id="rooms" href="#booking_now"><?= Yii::t('app', 'rooms') ?></a>
                <a class="navigation" id="ristorante" href="#restaurant"><?= Yii::t('app', 'restaurant') ?></a>
                <a class="navigation" id="blog" href="#blog"><?= Yii::t('app', 'blog') ?></a>
                <a class="navigation" id="location" href="#map"><?= Yii::t('app', 'location') ?></a>
            </div>
            <div class="nav" id="arrow"><a href="#"><span class="glyphicon">&#xe093;</a></span></div>
        </div>
    </header>
    <div class="container" width="100%">
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
            <div class="google"></div>
            <div class="facebook"></div>
        </div>
        <div class="flex logo_text" style="justify-content: space-around">
            <div class="logo" style="width: 40%;">
                <img src="img/fasad.jpg" width="100%"/>
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
