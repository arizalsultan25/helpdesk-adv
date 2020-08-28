<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thread;

/**
 * ThreadSearch represents the model behind the search form of `app\models\Thread`.
 */
class QuestionSearch extends Thread
{
    /**
     * {@inheritdoc}
     */

    public $globalSearch;

     public function rules()
    {
        return [
            [['thread_id'], 'integer'],
            [['title', 'description', 'globalSearch', 'date', 'status'], 'safe'],
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
        $query = Thread::find()->where(['status' => 'on progress']);

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
       /* $query->andFilterWhere([
            'thread_id' => $this->thread_id,
            'date' => $this->date,
        ]);
        */

        $query->orFilterWhere(['ilike', 'title', $this->globalSearch])
            ->orFilterWhere(['ilike', 'description', $this->globalSearch]);
            //->andFilterWhere(['ilike', 'image', $this->image])
            //->andFilterWhere(['ilike', 'status', $this->status]);

        return $dataProvider;
    }
}
