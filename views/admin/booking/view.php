<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = Yii::t('app', 'Booking on dates from ').
    date('d-m-Y',strtotime($model->date)).' '.
    Yii::t('app', 'to').' '.
    date('d-m-Y', strtotime($model->date) + $model->number_of_nights*24*3600);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bookings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'modified_at',
            'total_price',
            'customer_id',
            [
                'label' => Yii::t('app', 'Coming date'),
                'value' => date('d-m-Y', strtotime($model->date))
            ],
            [
                'label' => $model->attributeLabels()['room_id'],
                'value' => Html::a(
                            $model->room->number,
                            \yii\helpers\Url::to([
                                'room/view',
                                'id' => $model->room_id
                            ])
                    ),
                'format' => 'raw'
            ],
            'meal_plan',
            'number_of_guests',
            'status',
            'number_of_children',
            'number_of_nights',
            'addons',
        ],
    ]) ?>

</div>
