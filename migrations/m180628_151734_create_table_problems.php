<?php

use yii\db\Migration;

/**
 * Class m180628_151734_create_table_problems
 */
class m180628_151734_create_table_problems extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('problems',[
            'id'      => $this->primaryKey(),
            'category'  => $this->tinyInteger()->notNull(),
            'place'    => $this->tinyInteger()->notNull(),
            'comment' => $this->string(),
            'room_id' => $this->integer(),
            'status' => $this->tinyInteger(),
            'created_at' => $this->dateTime(),
            'updated_at' => 'timestamp on update current_timestamp'
        ]);

        $this->addForeignKey(
            'fk-problems-room_id',
            'problems',
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
        try{
            $this->dropTable('problems');
            return true;
        } catch(Exception $e) {
            echo 'Gets something wrecked'.$e->getTraceAsString();
            echo "m180628_151734_create_table_problems cannot be reverted.\n";
        }
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180628_151734_create_table_problems cannot be reverted.\n";

        return false;
    }
    */
}
