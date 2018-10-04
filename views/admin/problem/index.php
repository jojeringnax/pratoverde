<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProblemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model \app\models\Problem */

$this->title = Yii::t('app','Problems');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app','Create problem'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
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
            ], [
                'label' => Yii::t('app','Room number'),
                'value' => 'RoomNumber',
                'content' => function($model) {
                        return Html::a($model->getRoomNumber(), \yii\helpers\Url::to(['room/view','id' => $model->room->id]));
                    },
                'format' => 'raw'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
