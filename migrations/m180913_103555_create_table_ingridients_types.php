<?php

use yii\db\Migration;

/**
 * Class m180913_103555_create_table_ingridients_types
 */
class m180913_103555_create_table_ingridients_types extends Migration
{
    private $tableName = 'ingridients_types';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        try {
            $this->dropTable($this->tableName);
            return true;
        } catch (Exception $e) {
            echo $this->className()." cannot be reverted.\n";
            echo $e->getMessage();
            echo $e->getTraceAsString();
            return false;
        }
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180913_103555_create_table_ingridients_types cannot be reverted.\n";

        return false;
    }
    */
}
