<?php

use yii\db\Migration;


class m170327_150506_page_category extends Migration
{
    public function up()
    {
        $this->createTable('page_category', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'body' => $this->text()->notNull(),
            'img_url' => $this->string(255)->notNull()->defaultValue(''),
            'lang' => $this->string(2)->defaultValue("ru"),
            'published' => $this->smallInteger(1)->defaultValue(0),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => 'timestamp on update current_timestamp',
        ], 'ENGINE = INNODB AUTO_INCREMENT = 1 CHARACTER SET utf8 COLLATE utf8_general_ci');

        $this->addColumn('page', 'category_id', $this->integer()->notNull());
        $this->createIndex('idx__page_category_id', 'page', 'category_id');
    }

    public function down()
    {
        $this->dropTable('page_category');

        $this->dropIndex('idx__page_category_id', 'page');
        $this->dropColumn('page', 'category_id');
    }
}
