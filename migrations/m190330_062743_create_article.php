<?php

use yii\db\Migration;

/**
 * Class m190330_062743_create_article
 */
class m190330_062743_create_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'image'=>$this->string(),
            'category_id'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('article');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_062743_create_article cannot be reverted.\n";

        return false;
    }
    */
}
