<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 14/09/2018
 * Time: 09:26
 */

namespace app\controllers;


use app\models\Dish;
use app\models\Ingredient;
use app\models\QuantityOfIngridientsInDishes;
use Mpdf\Tag\Q;
use yii\web\Controller;

class MenuController extends Controller
{

    public function actionIndex()
    {
        $dishes = Dish::getAllDishesWithFullInfo();
        return $this->render('index', [
            'dishes' => $dishes
        ]);
    }

    /**
     * @return string
     */
    public function actionCreate()
    {
        $dish = new Dish();
        $ingredient = new Ingredient();
        $quantity = new QuantityOfIngridientsInDishes();
        return $this->render('create', [
            'dish' => $dish,
            'ingredient' => $ingredient,
            'quantity' => $quantity
        ]);
    }

}