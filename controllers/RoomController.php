<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 03/10/2018
 * Time: 12:38
 */

namespace app\controllers;


use app\models\Room;
use yii\swiftmailer\Mailer;
use yii\web\Controller;

class RoomController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * @param $type
     * @return string
     */
    public function actionBook($type) {
        if (!in_array(\Yii::$app->request->get('type'), \Yii::$app->params['roomTypes'])) {
            return 'nopr';
        }

        if (\Yii::$app->request->isPost) {
            \Yii::$app->mailer->compose()
                ->setFrom('hollow718@gmail.com')
                ->setTo('hollow718@gmail.com')
                ->setSubject('Message subject')
                ->setTextBody('Plain text content')
                ->setHtmlBody('<b>HTML content</b>')
                ->send();
            return 'nechto';
        }
        $availableRooms = Room::getRoomsForType($type);
        return $this->render('book', [
            'type' => $type,
            'roomTypes' => \Yii::$app->params['roomTypes'],
            'availableRooms' => $availableRooms
        ]);
    }

    /**
     * @return string
     */
    public function actionBookAjax() {
        if(\Yii::$app->request->isGet)
            $request = \Yii::$app->request->get();
            $number = array_keys($request)[0];
            $selectedType = array_values($request)[0];
            $availableRooms = Room::getRoomsForType(\Yii::$app->params['roomTypes'][$selectedType]);
            $response[$number] = count($availableRooms);
            return json_encode($response);
    }
}