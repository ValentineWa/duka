<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Shoes;

/**
 * ShoesSearch represents the model behind the search form of `frontend\models\Shoes`.
 */
class ShoesSearch extends Shoes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoesId', 'status', 'categoryId'], 'integer'],
            [['shoeName', 'description', 'image', 'createdAt'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Shoes::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'shoesId' => $this->shoesId,
            'price' => $this->price,
            'status' => $this->status,
            'categoryId' => $this->categoryId,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'shoeName', $this->shoeName])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
