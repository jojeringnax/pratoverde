<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 14/09/2018
 * Time: 09:26
 */

namespace app\controllers;


use app\models\menu\Dish;
use app\models\menu\Ingredient;
use app\models\menu\QuantityOfIngridientsInDishes;
use app\models\Photo;
use yii\web\Controller;
use yii\web\UploadedFile;

class MenuController extends Controller
{

    /**
     * @param $model Dish
     * @return bool
     */
    private function addPhoto($model)
    {
        $photo = new Photo();

        $photo->file = UploadedFile::getInstance($photo,'file');

        if ($photo->file === null) {
            return true;
        }

        $webPath = '/images/dish_photos/dish_'.$model->id.'_'.(count($model->photos) + 1).'.'.$photo->file->extension;
        $serverPath = '/public_html/pratoverde/web'.$webPath;

        $photo->category = 'Dish';
        $photo->server_path = $serverPath;
        $photo->link_to_photo = $webPath;
        $photo->room_id = $model->id;

        return $photo->upload();
    }

    /**
     * @return string
     */
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
        if (\Yii::$app->request->isPost) {



            if ($dish->save()) {
                if ($this->addPhoto($dish)) {
                    return $this->redirect(['view', 'id' => $dish->id]);
                }
            }
        }
        return $this->render('create', [
            'dish' => $dish,
            'ingredient' => $ingredient,
            'quantity' => $quantity
        ]);
    }

}