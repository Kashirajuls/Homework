<?php

use yii\db\Migration;

/**
 * Handles the creation for table `comments`.
 */
class m160604_102334_create_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'letter' => $this->text(),
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
        $this->dropTable('comments');
    }
}
