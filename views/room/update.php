<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = Yii::t('app', 'Update').' '.Yii::t('app', 'Room').': ' . $model->number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Rooms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->number, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app','Update');
?>
<div class="room-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>


</div>
