<?php

use yii\db\Migration;

class m170316_093421_page_sort extends Migration
{
    public function up()
    {
        $this->addColumn('page', 'sort', $this->integer()->notNull()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('page', 'sort');
    }
}
