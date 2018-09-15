<?php

use yii\db\Migration;
/**
 * Class m180628_151734_create_tables_photos_rooms_problems
 */
class m180628_151734_create_tables_photos_rooms_problems extends Migration
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
            'uploaded_at' => $this->dateTime()->defaultExpression('current_timestamp')
        ]);

        $this->createTable('rooms',[
            'id'      => $this->primaryKey(),
            'number'  => $this->tinyInteger()->notNull()->unique(),
            'type'    => $this->tinyInteger()->notNull(),
            'comment' => $this->string(),
            'facilities' => $this->string(),
            'smoking' => $this->tinyInteger(1),
            'state' => $this->string(16),
            'room_view_photo_id' => $this->integer(),
            'toilet_view_photo_id' => $this->integer()
        ]);


        $this->createTable('problems',[
            'id'         => $this->primaryKey(),
            'category'   => $this->tinyInteger()->notNull(),
            'place'      => $this->tinyInteger()->notNull(),
            'comment'    => $this->string(),
            'room_id'    => $this->integer(),
            'status'     => $this->tinyInteger(),
            'created_at' => $this->dateTime()->defaultExpression('current_timestamp'),
            'updated_at' => $this->timestamp()
        ]);

        $this->addForeignKey(
            'fk-problems-room_id',
            'problems',
            'room_id',
            'rooms',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-rooms-room_view_photo_id',
            'rooms',
            'room_view_photo_id',
            'photos',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-rooms-toilet_view_photo_id',
            'rooms',
            'toilet_view_photo_id',
            'photos',
            'id',
            'CASCADE'
        );

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
            $this->dropForeignKey('fk-photos-problem_id', 'photos');
            $this->dropForeignKey('fk-photos-room_id', 'photos');
            $this->dropForeignKey('fk-rooms-toilet_view_photo_id', 'rooms');
            $this->dropForeignKey('fk-rooms-room_view_photo_id', 'rooms');
            $this->dropForeignKey('fk-problems-room_id', 'problems');
            $this->dropTable('problems');
            $this->dropTable('rooms');
            $this->dropTable('photos');
            return true;
        } catch (Exception $e) {
            echo "m180703_085233_create_table_photos cannot be reverted.\n";
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
        echo "m180703_085233_create_table_photos cannot be reverted.\n";

        return false;
    }
    */
}
