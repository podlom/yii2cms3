<?php

use yii\db\Schema;
use yii\db\Migration;


class m170216_104526_error_log extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `errors_log` (
                `time` int(10) unsigned NOT NULL DEFAULT '0',
                `error_hash_id` varchar(32) NOT NULL DEFAULT '0',
                `snapshot_id` int(11) NOT NULL DEFAULT '0',
                `category` varchar(255) DEFAULT NULL,
                `error_no` mediumint(8) unsigned NOT NULL DEFAULT '0',
                `error_message` text NOT NULL,
                `error_file` varchar(255) NOT NULL DEFAULT '',
                `error_line` mediumint(8) unsigned NOT NULL DEFAULT '0',
                `uname` varchar(127) NOT NULL DEFAULT '',
                `host` varchar(255) DEFAULT NULL,
                `request_uri` varchar(1023) DEFAULT NULL,
                `remote_ip` int unsigned DEFAULT NULL,
                `http_referer` varchar(1023) DEFAULT NULL,
                `user_agent` varchar(255) DEFAULT NULL,
                `user_id` bigint DEFAULT NULL,
                `backtrace` text NOT NULL,
                `platform` tinyint NOT NULL,
                `repeated` mediumint(8) unsigned NOT NULL DEFAULT '0',
                PRIMARY KEY (`error_hash_id`,`snapshot_id`),
                KEY `time` (`time`),
                KEY `category` (`category`),
                KEY `error_hash_id` (`error_hash_id`,`time`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }

    public function down()
    {
        $this->execute("
            DROP TABLE IF EXISTS errors_log;
        ");

        return true;
    }
}
