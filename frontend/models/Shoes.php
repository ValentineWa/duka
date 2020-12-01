<?php

namespace frontend\models;

use Yii;
use frontend\models\Shoescategory;


/**
 * This is the model class for table "shoes".
 *
 * @property int $shoesId
 * @property string $shoeName
 * @property string $shoeSize
 * @property float $price
 * @property int $brandId
 * @property string $description
 * @property string $tags
 * @property string $image
 * @property int $status Status 0 represents available, status 1 represents sold
 * @property int $categoryId
 * @property string $createdAt
 *
 * @property Cart[] $carts
 * @property Brand $brand
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
            [['shoeName', 'shoeSize', 'price', 'brandId', 'description', 'tags', 'categoryId'], 'required'],
            [['price'], 'number'],
            [['brandId', 'status', 'categoryId'], 'integer'],
            [['description'], 'string'],
            [['createdAt'], 'safe'],
            [['shoeName', 'shoeSize', 'tags', 'image'], 'string', 'max' => 255],
            [['brandId'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brandId' => 'brandId']],
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
            'shoeSize' => 'Shoe Size',
            'price' => 'Price',
            'brandId' => 'Brand ID',
            'description' => 'Description',
            'tags' => 'Tags',
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
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['brandId' => 'brandId']);
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
