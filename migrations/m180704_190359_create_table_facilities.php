<?php

use yii\db\Migration;

/**
 * Class m180704_190359_create_table_facilities
 */
class m180704_190359_create_table_facilities extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('facilities', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64),
            'comment' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        try {
            $this->dropTable('facilities');
            return true;
        } catch (Exception $e) {
            echo "m180704_190359_create_table_facilities cannot be reverted.\n";
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
        echo "m180704_190359_create_table_facilities cannot be reverted.\n";

        return false;
    }
    */
}
