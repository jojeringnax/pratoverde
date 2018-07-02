<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = Yii::t('app', 'Room').' #'.$model->number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rooms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-view">

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
    <?= $model->getTextType() ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'number',
            [
                'label' => Yii::t('app', 'Type'),
                'value' => $model->textType
            ],
            'comment',
        ],
    ]) ?>

    <?= \yii\grid\GridView::widget([
        'dataProvider' => $problemsProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                 'label' => Yii::t('app', 'Category'),
                'value' => 'TextCategory'
            ],
            [
                'label' => Yii::t('app', 'Place'),
                'value' => 'TextPlace'
            ],
            'comment',
            [
                'label' => Yii::t('app', 'Status'),
                'value' => 'TextStatus'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'problem'
            ]
        ]
    ]); ?>

</div>
