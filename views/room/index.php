<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomSearch */
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
