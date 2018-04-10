<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dota_Player;

/**
 * Dota_PlayerSearch represents the model behind the search form of `app\models\Dota_Player`.
 */
class Dota_PlayerSearch extends Dota_Player
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Player_ID'], 'integer'],
            [['Username', 'E-Mail', 'Medal'], 'safe'],
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
        $query = Dota_Player::find();

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
            'Player_ID' => $this->Player_ID,
        ]);

        $query->andFilterWhere(['like', 'Username', $this->Username])
            ->andFilterWhere(['like', 'E-Mail', $this->E-Mail])
            ->andFilterWhere(['like', 'Medal', $this->Medal]);

        return $dataProvider;
    }
}
