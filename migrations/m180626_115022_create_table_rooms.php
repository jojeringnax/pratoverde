<?php

use yii\db\Migration;

/**
 * Class m180626_115022_create_table_rooms
 */
class m180626_115022_create_table_rooms extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rooms',[
            'id'      => $this->primaryKey(),
            'number'  => $this->tinyInteger()->notNull()->unique(),
            'type'    => $this->tinyInteger()->notNull(),
            'comment' => $this->string(),
            'facilities' => $this->string(),
            'smoking' => $this->tinyInteger(1),
            'state' => $this->string(16)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        try {
            $this->dropTable('rooms');
        } catch(Exception $e) {
            echo $e->getTraceAsString();
            return false;
        }
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180626_115022_create_table_rooms cannot be reverted.\n";

        return false;
    }
    */
}
