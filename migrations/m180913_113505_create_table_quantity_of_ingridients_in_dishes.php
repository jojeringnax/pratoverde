<?php

use yii\db\Migration;

/**
 * Class m180913_113505_create_table_quantity_of_ingridients_in_dishes
 */
class m180913_113505_create_table_quantity_of_ingridients_in_dishes extends Migration
{

    private $tableName = 'quantity_of_ingridients_in_dishes';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'dish_id' => $this->integer(11),
            'ingridient_id' => $this->integer(11),
            'quantity' => $this->integer(5),
            'unit' => $this->string(5)
        ]);

        $this->addForeignKey(
            'fk-quantity-dish_id',
            'quantity_of_ingridients_in_dishes',
            'dish_id',
            'dishes',
            'id',
            'RESTRICT'
        );

        $this->addForeignKey(
            'fk-quantity-ingridient_id',
            'quantity_of_ingridients_in_dishes',
            'ingridient_id',
            'ingridients',
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
            echo $this->className() . " cannot be reverted.\n";
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
        echo "m180913_113505_create_table_quantity_of_ingridients_in_dishes cannot be reverted.\n";

        return false;
    }
    */
}
