<?php

namespace vendor\mcicek34\social\src\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\mcicek34\social\src\models\Kullanicilar;

/**
 * KullanicilarSearch represents the model behind the search form of `vendor\mcicek34\social\src\models\Kullanicilar`.
 */
class KullanicilarSearch extends Kullanicilar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'UserID', 'F_UserID'], 'integer'],
            [['Username', 'Password', 'Name', 'Surname', 'Age', 'Location', 'Mail', 'Gender'], 'safe'],
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
        $query = Kullanicilar::find();

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
            'F_UserID' => $this->F_UserID,
        ]);

        $query->andFilterWhere(['like', 'Username', $this->Username])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Age', $this->Age])
            ->andFilterWhere(['like', 'Location', $this->Location])
            ->andFilterWhere(['like', 'Mail', $this->Mail])
            ->andFilterWhere(['like', 'Gender', $this->Gender]);

        return $dataProvider;
    }
}
