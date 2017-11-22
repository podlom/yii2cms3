<?php

use yii\db\Migration;

class m170316_090304_news_sort extends Migration
{
    public function up()
    {
        $this->addColumn('news', 'sort', $this->integer()->notNull()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('news', 'sort');
    }
}
