<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "myorder".
 *
 * @property int $orderId
 * @property int $userId
 * @property string $paymentMethod
 * @property string $phoneNo
 * @property string $emailAddress
 */
class Myorder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myorder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'paymentMethod', 'phoneNo', 'emailAddress'], 'required'],
            [['userId'], 'integer'],
            [['paymentMethod'], 'string'],
            [['phoneNo', 'emailAddress'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'userId' => 'User ID',
            'paymentMethod' => 'Payment Method',
            'phoneNo' => 'Phone No',
            'emailAddress' => 'Email Address',
        ];
    }
}
