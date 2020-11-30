<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $cartId
 * @property int $shoesId
 * @property int $totalItems
 * @property float $totalPrice
 *
 * @property Shoes $shoes
 * @property Myorder[] $myorders
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoesId', 'totalItems', 'totalPrice'], 'required'],
            [['shoesId', 'totalItems'], 'integer'],
            [['totalPrice'], 'number'],
            [['shoesId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoesId' => 'shoesId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cartId' => 'Cart ID',
            'shoesId' => 'Shoes ID',
            'totalItems' => 'Total Items',
            'totalPrice' => 'Total Price',
        ];
    }

    /**
     * Gets query for [[Shoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoes()
    {
        return $this->hasOne(Shoes::className(), ['shoesId' => 'shoesId']);
    }

    /**
     * Gets query for [[Myorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMyorders()
    {
        return $this->hasMany(Myorder::className(), ['cartId' => 'cartId']);
    }
}
