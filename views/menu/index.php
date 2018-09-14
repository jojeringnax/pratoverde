<?php

/* @var $this yii\web\View */
/* @var $model \app\models\Dish */
/* @var $dishes array */

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;

?>

<p>
    <?= \yii\helpers\Html::a(Yii::t('app','Create Dish'), ['create'], ['class' => 'btn btn-success']) ?>
</p>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th><?= Yii::t('app', 'Name') ?></th>
            <th><?= Yii::t('app', 'Ingridients') ?></th>
            <th><?= Yii::t('app','Cooking time') ?></th>
            <th><?= Yii::t('app','Description') ?></th>
            <th><?= Yii::t('app','Actions') ?></th>
        </tr>
    </thead>
    <tbody>

        <?php if(!empty($dishes)) {
            foreach ($dishes as $dish) { ?>
                <tr>
                    <td>
                        <?= $dish['dish']->id ?>
                    </td>
                    <td>
                        <?= $dish['dish']->name ?>
                    </td>
                    <td>
                        <ul>
                            <?php foreach ($dish['ingredients'] as $ingredient) { ?>
                            <li><?= $ingredient ?>
                                <?php } ?>
                        </ul>
                    </td>
                    <td>
                        <?= $dish['dish']->cooking_time ?>
                    </td>
                    <td>
                        <?= $dish['dish']->description ?>
                    </td>
                </tr>
            <?php }
        } else {?>
            <tr><td colspan="6" style="text-align: center;">Nothing to give</td></tr>
    <?php } ?>
    </tbody>
</table>
