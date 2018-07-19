<?php

use yii\db\Migration;

/**
 * Class m180705_072723_create_table_addons
 */
class m180705_072723_create_table_addons extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('addons', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64),
            'nights' => $this->tinyInteger(2),
            'persons' => $this->tinyInteger(2),
            'price_per_unit' => $this->tinyInteger(3),
            'created_at' => $this->dateTime()->defaultExpression('current_timestamp')
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        try {
            $this->dropTable('addons');
            return true;
        } catch (Exception $e) {
            echo "m180705_072723_create_table_addons cannot be reverted.\n";
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
        echo "m180705_072723_create_table_addons cannot be reverted.\n";

        return false;
    }
    */
}
