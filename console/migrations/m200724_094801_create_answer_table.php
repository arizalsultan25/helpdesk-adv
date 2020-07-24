<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%answer}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%question}}`
 */
class m200724_094801_create_answer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%answer}}', [
            'question' => $this->id()->integer()->notNull(),
            'answer_id' => $this->integer()->notNull()->primaryKey(),
            'email' => $this->varchar(100)->notNull(),
            'answer' => $this->text()->notNull(),
            'created_on' => $this->date(),
            'status' => $this->varchar(20),
        ]);

        // creates index for column `question`
        $this->createIndex(
            '{{%idx-answer-question}}',
            '{{%answer}}',
            'question'
        );

        // add foreign key for table `{{%question}}`
        $this->addForeignKey(
            '{{%fk-answer-question}}',
            '{{%answer}}',
            'question',
            '{{%question}}',
            'question_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%question}}`
        $this->dropForeignKey(
            '{{%fk-answer-question}}',
            '{{%answer}}'
        );

        // drops index for column `question`
        $this->dropIndex(
            '{{%idx-answer-question}}',
            '{{%answer}}'
        );

        $this->dropTable('{{%answer}}');
    }
}
