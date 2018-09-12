<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $id
 * @property string $address
 * @property int $cc_cvc
 * @property string $cc_expiration_date
 * @property string $cc_name
 * @property int $cc_number
 * @property string $cc_type
 * @property string $city
 * @property string $company
 * @property string $countrycode
 * @property int $dc_issue_number
 * @property string $dc_start_date
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $remarks
 * @property string $telephone
 * @property int $zip
 * @property string $created_at
 * @property string $update_at
 *
 * @property Booking[] $bookings
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cc_cvc', 'cc_number', 'dc_issue_number', 'zip'], 'integer'],
            [['remarks'], 'string'],
            [['created_at', 'update_at'], 'safe'],
            [['address'], 'string', 'max' => 255],
            [['cc_expiration_date', 'dc_start_date'], 'string', 'max' => 5],
            [['cc_name', 'email', 'first_name', 'last_name'], 'string', 'max' => 64],
            [['cc_type', 'telephone'], 'string', 'max' => 32],
            [['city'], 'string', 'max' => 16],
            [['company'], 'string', 'max' => 128],
            [['countrycode'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'address' => Yii::t('app', 'Address'),
            'cc_cvc' => Yii::t('app', 'Cc Cvc'),
            'cc_expiration_date' => Yii::t('app', 'Cc Expiration Date'),
            'cc_name' => Yii::t('app', 'Cc Name'),
            'cc_number' => Yii::t('app', 'Cc Number'),
            'cc_type' => Yii::t('app', 'Cc Type'),
            'city' => Yii::t('app', 'City'),
            'company' => Yii::t('app', 'Company'),
            'countrycode' => Yii::t('app', 'Countrycode'),
            'dc_issue_number' => Yii::t('app', 'Dc Issue Number'),
            'dc_start_date' => Yii::t('app', 'Dc Start Date'),
            'email' => Yii::t('app', 'Email'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'remarks' => Yii::t('app', 'Remarks'),
            'telephone' => Yii::t('app', 'Telephone'),
            'zip' => Yii::t('app', 'Zip'),
            'created_at' => Yii::t('app', 'Created At'),
            'update_at' => Yii::t('app', 'Update At'),
        ];
    }


    /**
     * @return array|Customer[]
     */
    public static function getAllCustomers()
    {
        foreach (Customer::find()->all() as $customer)
        {
            $result[$customer->id] = $customer;
        }
        return isset($result) ? $result : [];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['customer_id' => 'id']);
    }
}
