<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 03/10/2018
 * Time: 12:38
 */

namespace app\controllers;


use yii\web\Controller;

class RoomController extends Controller
{

    public function actionIndex() {
        return $this->render('index');
    }
}