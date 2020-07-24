<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $question_id
 * @property string $email
 * @property string $question
 * @property string|null $created_at
 *
 * @property Answer[] $answers
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'question'], 'required'],
            [['question'], 'string'],
            [['created_at'], 'safe'],
            [['email'], 'string', 'max' => 160],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'email' => 'Email',
            'question' => 'Question',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answer::className(), ['question_id' => 'question_id']);
    }
}
