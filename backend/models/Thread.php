<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thread".
 *
 * @property int $thread_id
 * @property string $title
 * @property string $description
 * @property string $date
 * @property string|null $image
 * @property string|null $status
 */
class Thread extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thread';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'date'], 'required'],
            [['description'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'thread_id' => 'Thread ID',
            'title' => 'Title',
            'description' => 'Description',
            'date' => 'Date',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
