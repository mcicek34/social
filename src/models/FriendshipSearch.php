<?php

namespace vendor\mcicek34\social\src\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\mcicek34\social\src\models\Friendship;

/**
 * FriendshipSearch represents the model behind the search form of `vendor\mcicek34\social\src\models\Friendship`.
 */
class FriendshipSearch extends Friendship
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'UserID'], 'integer'],
            [['FriendID', 'Relation_start_date'], 'safe'],
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
        $query = Friendship::find();

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
            'id' => $this->id,
            'UserID' => $this->UserID,
        ]);

        $query->andFilterWhere(['like', 'FriendID', $this->FriendID])
            ->andFilterWhere(['like', 'Relation_start_date', $this->Relation_start_date]);

        return $dataProvider;
    }
}
