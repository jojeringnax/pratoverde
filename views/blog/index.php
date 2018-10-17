<?php

/* @var $this yii\web\View */
/* @var $articles \app\models\Article[] */
$this->title = Yii::t('app', 'Hotel&Restaurant&Pizzeria Prato Verde in Polinago - Blog');

?>
<header id="head">
    <div class="flex wrapper_nav" style="position: fixed;">
        <div class="flex">
            <div class="nav" id="back"><a href="/" class="navigation"><span class="glyphicon glyphicon-arrow-left"></span></a></div>
            <!--<a style="display:block" href="/" class="nav" id="label"><?/*= Yii::t('app','back to overwiew') */?></a>-->
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
<div class="articles_wrapper" style="padding-top: 55px;">
    <?php foreach ($articles as $article) { ?>
        <div class="time"><i><?= date('M, d, Y', strtotime($article->created_at)) ?></i></div>
        <div class="name"><b><?= $article->name ?></b></div>
        <div class="content"><?= $article->content ?></div>
        <div class="sign"><i><?= $article->signification ?></i></div>
    <?php }?>
</div>
