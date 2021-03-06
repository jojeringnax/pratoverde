<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Problem */

$this->title = Yii::t('app', 'Problem').' #'.$model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Problems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


if (!empty($model->photos)) {
    $this->registerJsFile('//code.jquery.com/jquery-3.3.1.min.js');

    $this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css');
    $this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js');

    $css = "            
            .thumb img {
                -webkit-filter: grayscale(0);
                filter: none;
                border-radius: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 5px;
            }
     
            .thumb img:hover {
                -webkit-filter: grayscale(1);
                filter: grayscale(1);
            }
     
            .thumb {
                padding: 5px;
            }";

    $this->registerCss($css);
}
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

    <?php if(!empty($model->photos)) { ?>
        <div class="row">
            <?php foreach($model->photos as $photo) { ?>
                <div class="col-lg-3 col-md-4 col-6 thumb">
                    <a data-fancybox="gallery" href="<?= $photo->link_to_photo ?>">
                        <img width="100%" class="img-fluid" src="<?= $photo->link_to_photo ?>" alt="Hotel Prato Verde" />
                    </a>
                </div>
            <?php }; ?>
        </div>
    <?php } else { ?>
        <div class="row label-info">No photo</div>
    <?php } ?>
</div>
