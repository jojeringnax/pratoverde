<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 11/10/2018
 * Time: 15:31
 */

namespace app\controllers;


use app\models\Article;
use yii\web\Controller;

class BlogController extends Controller
{

    public function actionIndex() {
        $articles = Article::findAll(1);
        return $this->render('index', [
            'articles' => $articles
        ]);
    }
}