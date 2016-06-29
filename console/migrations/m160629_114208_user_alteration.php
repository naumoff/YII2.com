<?php

use yii\db\Migration;

class m160629_114208_user_alteration extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('user','created_at',$this->dateTime()->notNull());
        $this->alterColumn('user','updated_at',$this->dateTime()->notNull());
    }

    public function safeDown()
    {
        $this->alterColumn('user','created_at',$this->integer(11)->notNull());
        $this->alterColumn('user','updated_at',$this->integer(11)->notNull());
    }
}
