<?php

use yii\db\Migration;

class m170213_125556_page extends Migration
{
    public function up()
    {
        $this->createTable('page', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'announce' => $this->text()->notNull(),
            'body' => $this->text()->notNull(),
            'lang' => $this->string(2)->defaultValue("ru"),
            'published' => $this->smallInteger(1)->defaultValue(0),
            'created_at' => $this->timestamp()->defaultValue(null),
            // TODO: MySQL only: 'updated_at' => 'timestamp on update current_timestamp',
            'updated_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s')),
        ]);
        // TODO: MySQL only: 'ENGINE = INNODB AUTO_INCREMENT = 1 CHARACTER SET utf8 COLLATE utf8_general_ci'
    }

    public function down()
    {
        $this->dropTable('page');
    }
}
