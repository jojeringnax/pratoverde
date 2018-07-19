<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

   <div class="container">
       <div class="row">
           <div class="card-img col-lg-2">
               <img src="/images/room_photos/Room_1_1.jpg" width="100%"/>
           </div>
           <div class="col-lg-4">
               <div class="hotel_name h2">
                   Hotel Prato Verde
               </div>
               <div class="indirizzo">
                   <b><?= Yii::t('app', 'Address') ?>: </b>Via dei Friniati, 9, 41040 Polinago, Italia
               </div>
               <div class="phone">
                   <b><?= Yii::t('app', 'Phone') ?>: </b>+39 320 830 80 63
               </div>
               <div class="coordinates">
                   <b><?= Yii::t('app', 'GPS coordinates') ?>: </b>N 44&deg 20'36.906'', E 0.11&deg 43'28.916''
               </div>
           </div>
           <div class="col-lg-2">
               <div class="word" style="font-size: 13px; text-align: center">
                   <?= Yii::t('app', 'Arrival') ?>
               </div>
                <div class="number" style="text-align: center; font-weight: bold; font-size: 16px;">
                    1
                </div>
               <div class="month" style="text-align: center; font-weight: bold; font-size: 16px;">
                   <?= Yii::t('app', 'August') ?>
               </div>
           </div>
       </div>

   </div>
</div>
