<?php

namespace app\controllers\admin;

use app\models\Facility;
use app\models\Problem;
use Yii;
use app\models\Room;
use app\models\Photo;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomController implements the CRUD actions for Room model.
 */
class RoomController extends Controller
{

    public $layout = '@app/views/layouts/main';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @param $model Room
     * @return bool
     */
    private function addPhoto($model)
    {
        $photo = new Photo();

        $photo->file = UploadedFile::getInstance($photo,'file');

        if ($photo->file === null) {
            return true;
        }

        $webPath = '/images/room_photos/room_'.$model->id.'_'.(count($model->photos) + 1).'.'.$photo->file->extension;
        $serverPath = '/public_html/pratoverde/web'.$webPath;

        $photo->category = 'Room';
        $photo->server_path = $serverPath;
        $photo->link_to_photo = $webPath;
        $photo->room_id = $model->id;

        return $photo->upload();
    }

    /**
     * @param $model Room
     * @param $facilitiesFromPost
     * @return bool
     */
    private function getFacilitiesAsString($model, $facilitiesFromPost) {

        $facilitiesArray = [];
        if (empty($facilitiesFromPost) || !isset($facilitiesFromPost)) {
            return null;
        }

        foreach ($facilitiesFromPost as $facilityID) {
            $facility = Facility::findOne($facilityID);
            $facilitiesArray[] = $facility->name;
        }

        $facilitiesAsString = implode(',',$facilitiesArray);

        return $facilitiesAsString;
    }

    /**
     * Lists all Room models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isPost) {
            $language = Yii::$app->request->post('language');

            $languageCookie = new Cookie([
                'name' => 'language',
                'value' => $language,
                'expire' => time() + 60 * 60 * 24 * 30,
            ]);

            $languageCookie->init();

            Yii::$app->response->cookies->add($languageCookie);
            $this->refresh();
        }
        $query = Room::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'number' => SORT_ASC,
                ]
            ]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Displays a single Room model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $problems = Problem::find()->where(['room_id' => $id]);
        $problemsProvider = new ActiveDataProvider([
            'query' => $problems,
            'pagination' => [
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_ASC,
                    'status' => SORT_ASC
                ]
            ]
        ]);
        return $this->render('view', [
            'model' => $model,
            'problemsProvider' => $problemsProvider,
            'photos' => $model->photos
        ]);
    }

    /**
     * Creates a new Room model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Room();

        $facilities = Facility::getArrayIdToName();

        if (Yii::$app->request->isPost) {

            $roomPost = Yii::$app->request->post()['Room'];

            $facilitiesFromPost = $roomPost['facilities'];
            $stringFacilitiesFromPost = $this->getFacilitiesAsString($model, $facilitiesFromPost);

            $model->number = $roomPost['number'];
            $model->type = $roomPost['type'];
            $model->comment = $roomPost['comment'];
            $model->smoking = $roomPost['smoking'];
            $model->facilities = $stringFacilitiesFromPost;

            if($model->save()) {
                if ($this->addPhoto($model)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
            'facilities' => $facilities
        ]);
    }

    /**
     * Updates an existing Room model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $facilities = Facility::getArrayIdToName();

        /**
         * Facilities checked
         */
        $modelFacilitiesIDs = [];
        if ($model->facilities !== null) {

            $modelFacilities = $model->getFacilitiesIDsAsArray();

            foreach ($modelFacilities as $modelFacility) {
                if (Facility::getByName($modelFacility) !== null) {
                    $modelFacilitiesIDs[] = Facility::getByName($modelFacility)->id;
                }
            }
        }

        if (Yii::$app->request->isPost) {

            $roomPost = Yii::$app->request->post()['Room'];

            $facilitiesFromPost = $roomPost['facilities'];
            $stringFacilitiesFromPost = $this->getFacilitiesAsString($model, $facilitiesFromPost);

            $model->number = $roomPost['number'];
            $model->type = $roomPost['type'];
            $model->comment = $roomPost['comment'];
            $model->smoking = $roomPost['smoking'];
            $model->facilities = $stringFacilitiesFromPost;

            if ($model->save()) {
                if ($this->addPhoto($model)) {
                    return $this->redirect(\yii\helpers\Url::toRoute(['room/view', 'id' => $model->id]));
                }
            }

        }

        return $this->render('update', [
            'model'  => $model,
            'facilities' => $facilities,
            'modelFacilitiesIDs' => $modelFacilitiesIDs
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Exception
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Room model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Room the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Room::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
