<?php

use yii\db\Migration;

/**
 * Class m181011_123847_create_table_articles
 */
class m181011_123847_create_table_articles extends Migration
{
    private $tableName = 'articles';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(64),
            'content' => $this->text(),
            'signification' => $this->string(32),
            'created_at' => $this->dateTime()->defaultExpression('current_timestamp'),
            'modified_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        if($this->dropTable($this->tableName)) {
            return true;
        }
        echo "m181011_123847_create_table_articles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181011_123847_create_table_articles cannot be reverted.\n";

        return false;
    }
    */
}
