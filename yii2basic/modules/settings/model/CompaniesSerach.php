<?php

namespace app\modules\settings\model;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\settings\model\Companies;

/**
 * CompaniesSerach represents the model behind the search form of `app\modules\settings\model\Companies`.
 */
class CompaniesSerach extends Companies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comp_id'], 'integer'],
            [['company_name', 'com_address'], 'safe'],
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
        $query = Companies::find();

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
            'comp_id' => $this->comp_id,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'com_address', $this->com_address]);

        return $dataProvider;
    }
}
