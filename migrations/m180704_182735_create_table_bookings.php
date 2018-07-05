<?php

use yii\db\Migration;

/**
 * Class m180704_182735_create_table_bookings
 */
class m180704_182735_create_table_bookings extends Migration
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
            'number_of_nights' => $this->tinyInteger(3)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180704_182735_create_table_bookings cannot be reverted.\n";

        return false;
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
