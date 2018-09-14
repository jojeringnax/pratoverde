<?php
/* @var $this yii\web\View */
/* @var $dish \app\models\Dish */
/* @var $dishes array */

$this->title = 'Create dish';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Dishes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'dish' => $dish
]);
?>


