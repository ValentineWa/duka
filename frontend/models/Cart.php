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
 * @property int $createdBy
 *
 * @property Shoes $shoes
 * @property User $createdBy0
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
            [['shoesId', 'totalItems', 'totalPrice', 'createdBy'], 'required'],
            [['shoesId', 'totalItems', 'createdBy'], 'integer'],
            [['totalPrice'], 'number'],
            [['shoesId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoesId' => 'shoesId']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
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
            'createdBy' => 'Created By',
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
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
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
