<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss('
.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9,
col-lg-10, .col-lg-11, .col-lg-12 {
    padding-left: 0;
    padding-right: 0
}
');
?>
< D
    <html>

    </html>
    <div class="wrapper" style="width: 900px; border: solid black 2px; background-color: #eeeeee; ">
        <div class="container" style="width: 850px; padding-top: 12px; margin: 0 auto;">
            <div class="row" style="border-bottom: solid #aaa 2px; padding-bottom: 15px">
                <div class="card-img col-lg-2">
                   <img src="/images/room_photos/Room_1_1.jpg" width="100%"/>
                </div>
                <div class="col-lg-4" style="padding-left: 15px;padding-right: 15px;">
                   <div class="hotel_name">
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
                <div class="col-lg-2" style="border-left: solid #aaa 2px;">
                   <div class="word" style="font-size: 13px; text-align: center">
                       <?= strtoupper(Yii::t('app', 'Arrival')) ?>
                   </div>
                    <div class="number" style="text-align: center; font-weight: bold; font-size: 32px;">
                        1
                    </div>
                   <div class="month" style="text-align: center; font-weight: bold; font-size: 16px;">
                       <?= strtoupper(Yii::t('app', 'August')) ?>
                   </div>
                   <div class="day_of_week" style="font-style: italic; text-align: center; font-size: 12px">
                       <?= strtolower(Yii::t('app', 'Wednesday')) ?>
                   </div>
                   <div class="time" style="text-align: center; padding: 3px 0">
                       <span class="glyphicon glyphicon-time"></span>
                       <span>14:00 - 22:00</span>
                   </div>
                </div>
                <div class="col-lg-2" style="border-left: solid #aaa 2px;border-right: solid #aaa 2px;">
                   <div class="word" style="font-size: 13px; text-align: center">
                       <?= strtoupper(Yii::t('app', 'Departure')) ?>
                   </div>
                   <div class="number" style="text-align: center; font-weight: bold; font-size: 32px;">
                       21
                   </div>
                   <div class="month" style="text-align: center; font-weight: bold; font-size: 16px;">
                       <?= strtoupper(Yii::t('app', 'August')) ?>
                   </div>
                   <div class="day_of_week" style="font-style: italic; text-align: center; font-size: 12px">
                       <?= strtolower(Yii::t('app', 'Tuesday')) ?>
                   </div>
                   <div class="time" style="text-align: center; padding: 3px 0">
                       <span class="glyphicon glyphicon-time"></span>
                       <span>10:00 - 12:00</span>
                   </div>
                </div>
                <div class="col-lg-2">
                   <div class="room_nights" style="text-align: center;"><?= strtoupper(Yii::t('app', 'Room').'//'.Yii::t('app','Nights')) ?></div>
                   <div class="number" style="text-align: center; font-weight: bold; font-size: 32px;">
                       1/20
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                   <div class="price bold large" style="font-size: 28px; font-weight: bold">
                       <?= strtoupper(Yii::t('app', 'Price')) ?>
                   </div>
                   <div class="quantity">
                       1 <?= strtolower(Yii::t('app', 'Room')) ?>
                   </div>
                   <div class="IVA">
                       22% IVA
                   </div>
                   <div class="price" style="font-size: 32px;">
                       <?= Yii::t('app', 'Price') ?>
                   </div>
                   <div class="per_persons" style="color: #666">
                       (<?= strtolower(Yii::t('app', 'For 1 person')) ?>)
                   </div>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                   <div class="price bold large" style="font-size: 28px; font-weight: bold; color:transparent">
                       <?= strtoupper(Yii::t('app', 'Price')) ?>
                   </div>
                   <div class="price">
                       RUB 30.000
                   </div>
                   <div class="IVA">
                       RUB 6.600
                   </div>
                   <div class="price" style="font-size: 32px;">
                       <?= strtolower(Yii::t('app','Approximately')) ?> RUB 36.600
                   </div>
                   <div class="per_persons" style="color: #666">
                       &euro; 523
                   </div>
                </div>
            </div>
            <div class="row" style="padding: 6px 0;">
                <div class="col-lg-12">
                   <?= Yii::t('app','The price you see below is approximate and may include costs in multiple occupation, such as local taxes, or municipal or other supplimenti applied by the structure.') ?>
                </div>
            </div>
            <div class="row" style="padding: 6px 0;">
                <div class="col-lg-6">
                   <?= Yii::t('app', 'Tax of stay') ?> (RUB 58 x 1 <?= Yii::t('app', 'guest') ?> x 20 <?= Yii::t('app', 'nights') ?>)
                </div>
                <div class="col-lg-6" style="text-align: right;">
                   RUB 1.168
                </div>
            </div>
            <div class="row" style="padding-bottom: 12px;">
                <div class="col-lg-6 price realy_big" style="font-size: 34px;font-weight: bold;">
                   <?= Yii::t('app', 'Price').' '.strtolower(Yii::t('app', 'Final')) ?>
                </div>
                <div class="col-lg-6 price realy_big" style="font-size: 34px;font-weight: bold; text-align: right">
                   <span style="font-size: 24px;"><?= strtolower(Yii::t('app','Approximately')) ?></span> RUB 37.768
                </div>
                <div class="col-lg-6">
                   (<?= strtolower(Yii::t('app', 'Tax included')) ?>)
                </div>
                <div class="col-lg-6" style="text-align: right; font-size: 24px">
                   <?= Yii::t('app', 'For pay') ?> 583,00 in EUR.
                </div>
            </div>
            <div class="row" style=" border-bottom: solid #aaa 2px; padding-bottom: 4px; padding-top: 4px;">
                <div class="col-lg-12" style="font-weight: bold; font-size: 14px;">
                   <?= Yii::t('app', 'The total price shown is the amount that you pay') ?>.
                </div>
                <div class="col-lg-12">
                   <?= Yii::t('app', 'The company that issued your card may charge you a fee on transactions abroad.') ?>
                </div>
            </div>
            <div class="row" style=" border-bottom: solid #aaa 2px; padding-bottom: 4px; padding-top: 4px;">
                <div class="col-lg-12" style="font-weight: bold; font-size: 14px;">
                    <?= Yii::t('app', 'Information about the payment') ?>.
                </div>
                <div class="col-lg-12">
                    Hotel Prato Verde <?= Yii::t('app', 'accepts VISA, MasterCard e.t.c.') ?>.
                </div>
            </div>
            <div class="row" style=" border-bottom: solid #aaa 2px; padding-bottom: 4px; padding-top: 4px;">
                <div class="col-lg-12" style="font-weight: bold; font-size: 14px;">
                    <?= Yii::t('app', 'Information on currency and exchange rate') ?>.
                </div>
                <div class="col-lg-12">
                    Hotel Prato Verde <?= Yii::t('app', 'accept payments in EUR based on the exchange rate on the day of payment') ?>.
                    <br />
                    <?= Yii::t('app', 'The amount indicated in the RUB is only an estimate, calculated at today\'s exchange rate for the EUR currency') ?>.
                </div>
            </div>
            <div class="row" style=" border-bottom: solid #aaa 2px; padding-bottom: 4px; padding-top: 4px;">
                <div class="col-lg-12" style="font-weight: bold; font-size: 14px;">
                    <?= Yii::t('app', 'Information on currency and exchange rate') ?>.
                </div>
                <div class="col-lg-12">
                    Hotel Prato Verde <?= Yii::t('app', 'accept payments in EUR based on the exchange rate on the day of payment') ?>.
                    <br />
                    <?= Yii::t('app', 'The amount indicated in the RUB is only an estimate, calculated at today\'s exchange rate for the EUR currency') ?>.
                </div>
            </div>
        </div>
    </div>


