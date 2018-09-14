<?php

use yii\db\Migration;

/**
 * Class m180913_095028_create_table_special_types
 */
class m180913_095028_create_table_special_types extends Migration
{

   private $tableName = 'special_types';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(32),
            'description' => $this->text(),
            'created_at' => $this->timestamp()
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
        echo "m180913_095028_create_table_special_types cannot be reverted.\n";

        return false;
    }
    */
}
