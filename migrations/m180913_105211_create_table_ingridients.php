<?php

use yii\db\Migration;

/**
 * Class m180913_105211_create_table_ingridients
 */
class m180913_105211_create_table_ingridients extends Migration
{
    private $tableName = 'ingridients';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(32),
            'description' => $this->text(),
            'type_id' => $this->integer(11)
        ]);

        $this->addForeignKey(
            'fk-ingridients-type_id',
            'ingridients',
            'type_id',
            'ingridients_types',
            'id',
            'RESTRICT'
        );
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
        echo "m180913_105211_create_table_ingridients cannot be reverted.\n";

        return false;
    }
    */
}
