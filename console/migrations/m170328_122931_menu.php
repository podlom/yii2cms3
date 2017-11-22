<?php

use yii\db\Migration;

class m170328_122931_menu extends Migration
{
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'lang' => $this->string(2)->defaultValue("ru"),
            'published' => $this->smallInteger(1)->defaultValue(0),
            'type' => $this->integer()->notNull()->defaultValue(0),
            'sort' => $this->integer()->notNull()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => 'timestamp on update current_timestamp',
        ], 'ENGINE = INNODB AUTO_INCREMENT = 1 CHARACTER SET utf8 COLLATE utf8_general_ci');
    }

    public function down()
    {
        $this->dropTable('menu');
    }
}
