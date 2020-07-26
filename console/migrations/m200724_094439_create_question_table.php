<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%question}}`.
 */
class m200724_094439_create_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%question}}', [
            'question_id' => $this->primaryKey(),
            'email' => $this->string(100)->notNull(),
            'question' => $this->text()->notNull(),
            'created_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%question}}');
    }
}
