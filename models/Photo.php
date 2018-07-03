<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "photos".
 *
 * @property int $id
 * @property string $server_path
 * @property string $link_to_photo
 * @property string $category
 * @property int $room_id
 * @property int $problem_id
 *
 * @property Problem $problem
 * @property Room $room
 */
class Photo extends ActiveRecord
{

    /**
     * @var UploadedFile
     */
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'problem_id'], 'integer'],
            [['server_path'], 'string', 'max' => 64],
            [['link_to_photo'], 'string', 'max' => 128],
            [['category'], 'string', 'max' => 10],
            [['problem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Problem::className(), 'targetAttribute' => ['problem_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'server_path' => Yii::t('app', 'Server Path'),
            'link_to_photo' => Yii::t('app', 'Link To Photo'),
            'category' => Yii::t('app', 'Category'),
            'room_id' => Yii::t('app', 'Room ID'),
            'problem_id' => Yii::t('app', 'Problem ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProblem()
    {
        return $this->hasOne(Problem::className(), ['id' => 'problem_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * @return int
     */
    public function getNextNumberForPhotoForRoom()
    {
        return count($this->room->photos) + 1;
    }

    /**
     * @return int
     */
    public function getNextNumberForPhotoForProblem()
    {
        return count($this->problem->photos) + 1;
    }

    /**
     * @return string
     */
    public function getRoomOrProblem()
    {
        return $this->problem_id === null ? $this->room->className() : $this->problem->className();
    }


    /**
     * @return bool
     */
    public function upload()
    {
        if($this->validate()) {
            $roomOrProblem = $this->getRoomOrProblem();
            $roomOrProblemLower = strtolower($roomOrProblem);
            $nameMethodForNextPhoto = 'getNextNumberPhotoFor'.$roomOrProblem;
            $necessary_ID = $this->$roomOrProblemLower->id;
            $this->file->saveAs('images/'.$this->category.'_photos/'.$this->category.'_'.$necessary_ID.'_'.$this->$nameMethodForNextPhoto().$this->file->extension);
            return true;
        }
        return false;
    }
}
