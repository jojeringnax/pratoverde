<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Rooms');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="room-index">
    <?= Html::beginForm() ?>
    <?= Html::dropDownList('language', Yii::$app->language, ['en' => 'English', 'it' => 'Italiano']) ?>
    <?= Html::submitButton('Change') ?>
    <?= Html::endForm() ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create room'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php \yii\widgets\Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'number',
            [
                    'label' => Yii::t('app', 'Type'),
                    'value' => 'TextType'
            ],
            'comment',
            [
                'label' => Yii::t('app', 'Number of problems'),
                'value' => 'CountProblems'
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {book}',
                'buttons' => [
                    'book' => function($model, $key, $index) {
                        return Html::a('<span class="glyphicon glyphicon-book">', \yii\helpers\Url::to(['booking/create', 'room_id' => $key->id]));
                    }
                ]
            ],
        ],
    ]); ?>

    <?php \yii\widgets\Pjax::end(); ?>
</div>
