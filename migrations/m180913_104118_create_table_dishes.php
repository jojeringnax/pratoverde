<?php

use yii\db\Migration;

/**
 * Class m180913_104118_create_table_dishes
 */
class m180913_104118_create_table_dishes extends Migration
{

    private $tableName = 'dishes';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
           'id' => $this->primaryKey(),
           'name' => $this->string(32),
           'created_at' => $this->dateTime()->defaultExpression('current_timestamp'),
           'updated_at' => $this->timestamp(),
            'description' => $this->text(),
            'special_types' => $this->string(32),
            'type_id' => $this->integer(11)
        ]);

        $this->addForeignKey(
            'fk-dishes-type_id',
            'dishes',
            'type_id',
            'dishes_types',
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
        echo "m180913_104118_create_table_dishes cannot be reverted.\n";

        return false;
    }
    */
}