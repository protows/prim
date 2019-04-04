<?php

use yii\db\Migration;

/**
 * Class m190330_062815_create_category
 */
class m190330_062815_create_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_062815_create_category cannot be reverted.\n";

        return false;
    }
    */
}
