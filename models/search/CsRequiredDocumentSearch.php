<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CsRequiredDocument;

/**
 * CsRequiredDocumentSearch represents the model behind the search form of `app\models\CsRequiredDocument`.
 */
class CsRequiredDocumentSearch extends CsRequiredDocument
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['document_id'], 'integer'],
            [['document_name'], 'safe'],
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
        $query = CsRequiredDocument::find();

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
            'document_id' => $this->document_id,
        ]);

        $query->andFilterWhere(['ilike', 'document_name', $this->document_name]);

        return $dataProvider;
    }
}
