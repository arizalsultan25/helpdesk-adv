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

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200722_084856_threadTable cannot be reverted.\n";

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
