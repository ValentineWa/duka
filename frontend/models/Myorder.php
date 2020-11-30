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
 *
 * @property User $user
 * @property Cart $cart
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
            [['cartId', 'orderNo', 'userId'], 'required'],
            [['cartId', 'orderNo', 'userId'], 'integer'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Cart::className(), 'targetAttribute' => ['cartId' => 'cartId']],
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
}
