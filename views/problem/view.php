<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Problem */

$this->title = Yii::t('app', 'Problem').' #'.$model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Problems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app','Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <pre><?= print_r($files) ?></pre>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => Yii::t('app','Category'),
                'value' => $model->getTextCategory()
            ],
            [
                'label' => Yii::t('app','Place'),
                'value' => $model->getTextPlace()
            ],
            'comment',
            [
                'label' => Yii::t('app','Room number'),
                'value' => Html::a(
                        $model->getRoomNumber(),
                        \yii\helpers\Url::to(
                                [
                                    'room/view',
                                    'id' => $model->room_id
                                ]
                        )
                ),
                'format' => 'raw'
            ],
            [
                'label' => Yii::t('app','Status'),
                'value' => $model->getTextStatus()
            ]
        ],
    ]) ?>

</div>
