<?php
/* @var $dish \app\models\menu\Dish */
/* @var $this \yii\web\View */
/* @var $ingredient \app\models\menu\Ingredient */
/* @var $dishType \app\models\menu\DishesType */
/* @var $ingredientType \app\models\menu\IngredientsType */
/* @var $quantity \app\models\menu\QuantityOfIngridientsInDishes */
/* @var $allIngredients \app\models\menu\Ingredient[] | null */

$this->title = 'Create dish';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Dishes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'dish' => $dish,
    'ingredient' => $ingredient,
    'quantity' => $quantity,
    'dishType' => $dishType,
    'ingredientType' => $ingredientType,
    'allIngredients' => $allIngredients
]);
?>


