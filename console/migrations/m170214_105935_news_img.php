<?php

use yii\db\Migration;

class m170214_105935_news_img extends Migration
{
    public function up()
    {
        $this->addColumn('news', 'img_url', $this->string(255)->notNull()->defaultValue(''));
    }

    public function down()
    {
        $this->dropColumn('news', 'img_url');
    }
}
