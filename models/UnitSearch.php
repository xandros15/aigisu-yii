<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * UnitSearch represents the model behind the search form about `app\models\Unit`.
 */
class UnitSearch extends Unit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dmm', 'nutaku', 'special_cg'], 'integer'],
            [
                [
                    'name',
                    'japanese_name',
                    'icon',
                    'link_seesaw',
                    'link_gc',
                    'rarity',
                    'gender',
                    'created_at',
                    'updated_at',
                ],
                'safe',
            ],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Unit::find();

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
            'dmm' => $this->dmm,
            'nutaku' => $this->nutaku,
            'special_cg' => $this->special_cg,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
              ->andFilterWhere(['like', 'japanese_name', $this->japanese_name])
              ->andFilterWhere(['like', 'icon', $this->icon])
              ->andFilterWhere(['like', 'link_seesaw', $this->link_seesaw])
              ->andFilterWhere(['like', 'link_gc', $this->link_gc])
              ->andFilterWhere(['like', 'rarity', $this->rarity])
              ->andFilterWhere(['like', 'gender', $this->gender]);

        return $dataProvider;
    }
}
