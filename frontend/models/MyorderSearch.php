<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Myorder;

/**
 * MyorderSearch represents the model behind the search form of `frontend\models\Myorder`.
 */
class MyorderSearch extends Myorder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'userId'], 'integer'],
            [['paymentMethod', 'phoneNo', 'emailAddress'], 'safe'],
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
        $query = Myorder::find();

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
            'orderId' => $this->orderId,
            'userId' => $this->userId,
        ]);

        $query->andFilterWhere(['like', 'paymentMethod', $this->paymentMethod])
            ->andFilterWhere(['like', 'phoneNo', $this->phoneNo])
            ->andFilterWhere(['like', 'emailAddress', $this->emailAddress]);

        return $dataProvider;
    }
}
