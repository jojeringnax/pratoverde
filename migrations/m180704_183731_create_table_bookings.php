<?php

use yii\db\Migration;

/**
 * Class m180704_183731_create_table_bookings
 */
class m180704_183731_create_table_bookings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookings', [
            'id' => $this->primaryKey(),
            'booked_at' => $this->dateTime()->defaultExpression('current_timestamp'),
            'modified_at' => $this->timestamp(),
            'total_price' => $this->float(2)->defaultValue(0.00),
            'customer_id' => $this->integer(),
            'date' => $this->dateTime(),
            'room_id' => $this->integer(),
            'meal_plan' => $this->string(),
            'number_of_guests' => $this->tinyInteger(2),
            'status' => $this->string(16),
            'number_of_children' => $this->tinyInteger(2),
            'number_of_nights' => $this->tinyInteger(3),
            'addons' => $this->string()
        ]);

        $this->addForeignKey(
            'fk-bookings-customer_id',
            'bookings',
            'customer_id',
            'customers',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-bookings-room_id',
            'bookings',
            'room_id',
            'rooms',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        try {
            $this->dropTable('bookings');
            return true;
        } catch (Exception $e) {
            echo "m180704_182735_create_table_bookings cannot be reverted.\n";
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
        echo "m180704_182735_create_table_bookings cannot be reverted.\n";

        return false;
    }
    */
}
