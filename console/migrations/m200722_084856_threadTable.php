<?php

use yii\db\Migration;

/**
 * Class m200722_084856_threadTable
 */
class m200722_084856_threadTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('thread', [
            'thread_id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'description' => $this->text()->notNull(),
            'date' => $this->date()->notNull(),
            'image' => $this->string(255),
            'status' => $this->string(20),
            'faq' => $this->string(),
        ]);

        $this->insert('thread', [
            'thread_id' => 1,
            'title' => "Can't Remove assets data",
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, nemo aperiam, excepturi quidem ipsa aspernatur error adipisci nisi sunt explicabo iusto accusamus reiciendis, obcaecati suscipit eveniet repellat necessitatibus minima recusandae.',
            'date' => date('Y-m-d'),
            'status' => 'Selesai',

        ]);

        $this->insert('thread', [
            'thread_id' => 2,
            'title' => "Didn't receive email confirmation",
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, nemo aperiam, excepturi quidem ipsa aspernatur error adipisci nisi sunt explicabo iusto accusamus reiciendis, obcaecati suscipit eveniet repellat necessitatibus minima recusandae.',
            'date' => date('Y-m-d'),
            'status' => 'On Progress',

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200722_084856_threadTable cannot be reverted.\n";

        $this->dropTable('thread');
        $this->delete('thread', 'thread_id', 1);

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200722_084856_threadTable cannot be reverted.\n";

        return false;
    }
    */
}
