<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bookings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Booking'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'value' => 'modified_at',
            'total_price',
            'date:date',
            [
                'label' => 'Date Outgoing',
                'value' => 'EndDateFormat'
            ],
            [
                'label' => 'Room Number',
                'value' => 'RoomNumber',
                'content' => function($model) {
                    return $model->room === null ? Yii::t('yii', '(not set)') : Html::a($model->getRoomNumber(), \yii\helpers\Url::to(['room/view', 'id' => $model->room_id]));
                },
                'format' => 'raw'
            ],
            'meal_plan',
            'number_of_guests',
            //'status',
            //'number_of_children',
            'number_of_nights',
            //'addons',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
