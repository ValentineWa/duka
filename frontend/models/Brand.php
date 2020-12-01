<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $brandId
 * @property string $brandName
 * @property string $logo
 *
 * @property Shoes[] $shoes
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brandName', 'logo'], 'required'],
            [['brandName', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'brandId' => 'Brand ID',
            'brandName' => 'Brand Name',
            'logo' => 'Logo',
        ];
    }

    /**
     * Gets query for [[Shoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoes()
    {
        return $this->hasMany(Shoes::className(), ['brandId' => 'brandId']);
    }
}
