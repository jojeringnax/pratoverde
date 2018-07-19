<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property int $id
 * @property string $booked_at
 * @property string $modified_at
 * @property double $total_price
 * @property int $customer_id
 * @property string $date
 * @property int $room_id
 * @property string $meal_plan
 * @property int $number_of_guests
 * @property string $status
 * @property int $number_of_children
 * @property int $number_of_nights
 * @property string $addons
 *
 * @property Customer $customer
 * @property Room $room
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booked_at', 'modified_at', 'date'], 'safe'],
            [['total_price'], 'number'],
            [['customer_id', 'room_id', 'number_of_guests', 'number_of_children', 'number_of_nights'], 'integer'],
            [['meal_plan', 'addons'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 16],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'booked_at' => Yii::t('app', 'Booked At'),
            'modified_at' => Yii::t('app', 'Modified At'),
            'total_price' => Yii::t('app', 'Total Price'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'date' => Yii::t('app', 'Date'),
            'room_id' => Yii::t('app', 'Room ID'),
            'meal_plan' => Yii::t('app', 'Meal Plan'),
            'number_of_guests' => Yii::t('app', 'Number Of Guests'),
            'status' => Yii::t('app', 'Status'),
            'number_of_children' => Yii::t('app', 'Number Of Children'),
            'number_of_nights' => Yii::t('app', 'Number Of Nights'),
            'addons' => Yii::t('app', 'Addons'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
