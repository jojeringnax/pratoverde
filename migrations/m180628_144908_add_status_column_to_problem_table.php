<?php

use yii\db\Migration;

/**
 * Handles adding status to table `problem`.
 */
class m180628_144908_add_status_column_to_problem_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('problems', 'status', 'string(32)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('problems', 'status');
    }
}
