<?php

use yii\db\Migration;

/**
 * Class m180703_085233_create_table_photos
 */
class m180703_085233_create_table_photos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photos', [
            'id' => $this->primaryKey(),
            'server_path' => $this->string(128),
            'link_to_photo' => $this->string(128),
            'category' => $this->string(10),
            'room_id' => $this->integer(),
            'problem_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-photos-room_id',
            'photos',
            'room_id',
            'rooms',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
        'fk-photos-problem_id',
        'photos',
        'problem_id',
        'problems',
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
            $this->dropTable('photos');
            return true;
        } catch (Exception $e) {
            echo "m180703_085233_create_table_photos cannot be reverted.\n";
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
        echo "m180703_085233_create_table_photos cannot be reverted.\n";

        return false;
    }
    */
}
