<?php

use yii\db\Migration;

/**
 * Class m180704_182735_create_table_customers
 */
class m180704_182735_create_table_customers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey(),
            'address' => $this->string(),
            'cc_cvc' => $this->tinyInteger(3),
            'cc_expiration_date' => $this->string(5),
            'cc_name' => $this->string(64),
            'cc_number' => $this->tinyInteger(16),
            'cc_type' => $this->string(32),
            'city' => $this->string(16),
            'company' => $this->string(128),
            'countrycode' => $this->string(2),
            'dc_issue_number' => $this->tinyInteger(16),
            'dc_start_date' => $this->string(5),
            'email' => $this->string(64),
            'first_name' => $this->string(64),
            'last_name' => $this->string(64),
            'remarks' => $this->text(),
            'telephone' => $this->string(32),
            'zip' => $this->tinyInteger(10),
            'created_at' => $this->dateTime()->defaultExpression('current_timestamp'),
            'update_at' => $this->timestamp()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        try {
            $this->dropTable('customers');
            return true;
        } catch (Exception $e) {
            echo "customers cannot be reverted.\n";
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
        echo "m180704_183731_create_table_customers cannot be reverted.\n";

        return false;
    }
    */
}
