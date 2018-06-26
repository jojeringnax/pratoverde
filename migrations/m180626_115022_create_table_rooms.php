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
            'type'    => $this->string()->defaultValue('normal'),
            'comment' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
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
