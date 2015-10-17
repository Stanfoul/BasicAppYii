<?php

use yii\db\Schema;
use yii\db\Migration;

class m151017_084707_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id'=>Schema::TYPE_PK,
                'password'=>Schema::TYPE_STRING.' NOT NULL',
                'email'=>Schema::TYPE_STRING.' NOT NULL'
            ]
        );
    }

    public function down()
    {
        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
