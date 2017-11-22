<?php

use yii\db\Migration;

class m170214_162429_page_indices extends Migration
{
    public function up()
    {
        $this->createIndex('un__page_slug', 'page', 'slug', true);
        $this->createIndex('idx__page_lang', 'page', 'lang');
        $this->createIndex('idx__page_published', 'page', 'published');
    }

    public function down()
    {
        $this->dropIndex('un__page_slug', 'page');
        $this->dropIndex('idx__page_lang', 'page');
        $this->dropIndex('idx__page_published', 'page');
    }
}
