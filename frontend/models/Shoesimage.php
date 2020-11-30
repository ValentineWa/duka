<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shoesimage".
 *
 * @property int $shoesimageId
 * @property int $shoesId
 * @property string $image
 *
 * @property Shoes $shoes
 */
class Shoesimage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoesimage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoesId', 'image'], 'required'],
            [['shoesId'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['shoesId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoesId' => 'shoesId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shoesimageId' => 'Shoesimage ID',
            'shoesId' => 'Shoes ID',
            'image' => 'Image',
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
}
