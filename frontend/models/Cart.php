<?php

namespace frontend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "cart".
 *
 * @property int $cartId
 * @property int $shoesId
 * @property int $userId
 *
 * @property Shoes $shoes
 * @property User $user
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
            [['shoesId', 'userId'], 'required'],
            [['shoesId', 'userId'], 'integer'],
            [['shoesId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoesId' => 'shoesId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
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
            'userId' => 'User ID',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
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
