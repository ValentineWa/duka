<?php

namespace frontend\models;

use Yii;
use frontend\models\Shoescategory;

/**
 * This is the model class for table "shoes".
 *
 * @property int $shoesId
 * @property string $shoeName
 * @property float $price
 * @property string $description
 * @property string $image
 * @property int $status Status 0 represents available, status 1 represents sold
 * @property int $categoryId
 * @property string $createdAt
 *
 * @property Cart[] $carts
 * @property Shoescategory $category
 * @property Shoesimage[] $shoesimages
 */
class Shoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoeName', 'price', 'description', 'image', 'categoryId'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['status', 'categoryId'], 'integer'],
            [['createdAt'], 'safe'],
            [['shoeName', 'image'], 'string', 'max' => 255],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoescategory::className(), 'targetAttribute' => ['categoryId' => 'categoryId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shoesId' => 'Shoes ID',
            'shoeName' => 'Shoe Name',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'status' => 'Status',
            'categoryId' => 'Category ID',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Carts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['shoesId' => 'shoesId']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Shoescategory::className(), ['categoryId' => 'categoryId']);
    }

    /**
     * Gets query for [[Shoesimages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoesimages()
    {
        return $this->hasMany(Shoesimage::className(), ['shoesId' => 'shoesId']);
    }
}
