<?php

use yii\db\Schema;
use yii\db\Migration;

class m151017_081608_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user',['id'=>'pk','password'=>'string NOT NULL','email'=>'string NOT NULL']);
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
