<?php

use yii\db\Migration;

class m170214_163422_news_indices extends Migration
{
    public function up()
    {
        $this->createIndex('un__news_slug', 'news', 'slug', true);
        $this->createIndex('idx__news_lang', 'news', 'lang');
        $this->createIndex('idx__news_published', 'news', 'published');
    }

    public function down()
    {
        $this->dropIndex('un__news_slug', 'news');
        $this->dropIndex('idx__news_lang', 'news');
        $this->dropIndex('idx__news_published', 'news');
    }
}
