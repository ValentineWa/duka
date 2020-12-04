<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "myorder".
 *
 * @property int $orderId
 * @property int $cartId
 * @property int $orderNo
 * @property int $userId
 * @property string $paymentMethod
 * @property string $cardNo
 * @property int $createdBy
 *
 * @property User $user
 * @property Cart $cart
 * @property User $createdBy0
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
            [['cartId', 'orderNo', 'userId', 'paymentMethod', 'cardNo', 'createdBy'], 'required'],
            [['cartId', 'orderNo', 'userId', 'createdBy'], 'integer'],
            [['paymentMethod', 'cardNo'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Cart::className(), 'targetAttribute' => ['cartId' => 'cartId']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'cartId' => 'Cart ID',
            'orderNo' => 'Order No',
            'userId' => 'User ID',
            'paymentMethod' => 'Payment Method',
            'cardNo' => 'Card No',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::className(), ['cartId' => 'cartId']);
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
    }
}
