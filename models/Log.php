<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 29/06/2018
 * Time: 11:37
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * This is the model class for table "logs".
 *
 * Class Log
 * @package app\models
 *
 * @property int $id
 * @property string $text
 */
class Log extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logs';
    }

    public static function write($message)
    {
        $log = new self;
        $log->text = $message;
        return $log->save();
    }


}