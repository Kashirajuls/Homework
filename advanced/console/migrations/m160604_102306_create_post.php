<?php

use yii\db\Migration;

/**
 * Handles the creation for table `post`.
 */
class m160604_102306_create_post extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'updated_at' => 'timestamp on update current_timestamp',
            'created_at' => $this->timestamp()->defaultValue(0), 
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('post');
    }
}
