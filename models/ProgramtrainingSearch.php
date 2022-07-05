<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Programtraining;

/**
 * ProgramtrainingSearch represents the model behind the search form of `app\models\Programtraining`.
 */
class ProgramtrainingSearch extends Programtraining
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdTra', 'NamaTraining', 'Budget_Rupiah'], 'safe'],
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
        $query = Programtraining::find();

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
        $query->andFilterWhere(['like', 'IdTra', $this->IdTra])
            ->andFilterWhere(['like', 'NamaTraining', $this->NamaTraining])
            ->andFilterWhere(['like', 'Budget_Rupiah', $this->Budget_Rupiah]);

        return $dataProvider;
    }
}
