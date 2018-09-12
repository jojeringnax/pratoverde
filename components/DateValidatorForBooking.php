<?php
/**
 * Created by PhpStorm.
 * User: jojer
 * Date: 28/07/2018
 * Time: 19:32
 */

namespace app\components;

use app\models\Booking;
use app\models\Log;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\validators\Validator;

class DateValidatorForBooking extends Validator
{
    /**
     * @var Booking[]
     */
    private $bookingsWithSameRoomNumber;

    /**
     * @param Booking $model
     * @param string $attribute
     *
     */
    public function validateAttribute($model, $attribute)
    {
        $this->bookingsWithSameRoomNumber = Booking::find()->where(['room_id' => $model->room_id])->andWhere(['<>', 'id', $model->id])->all();
        foreach ($this->bookingsWithSameRoomNumber as $booking) {
            $newStartDate = strtotime($model->date);
            $newEndDate = strtotime($model->date) + $model->number_of_nights*24*3600;
            $oldStartDate = strtotime($booking->date);
            $oldEndDate = strtotime($booking->date) + $booking->number_of_nights*24*3600;

            $message = "
            New Start = $newStartDate
            New End = $newEndDate
            
            
            Old Start = $oldStartDate
            Old End = $oldEndDate
            ";

            Log::write($message);


            if (
                ($newStartDate > $oldStartDate && $newStartDate < $oldEndDate) ||
                ($newEndDate > $oldStartDate && $newEndDate < $oldEndDate) ||
                ($newStartDate < $oldStartDate && $newEndDate > $oldEndDate)
            ) {
                $errorBookings[] = $booking;
            }

        }
        if (!empty($errorBookings)) {

            foreach ($errorBookings as $booking) {
                $errorArray[] = Html::a($booking->id, Url::to(['booking/view', 'id' => $booking->id]));
            }
            $this->addError($model, $attribute, 'This booking close others: '.implode(', ', $errorArray));
        }

    }

}