<?php

use yii\db\Migration;

class m170407_091405_create_table_user_hobby extends Migration
{
    public function up()
    {
        $this->createTable('user_hobby', [
            'id'=>$this->primaryKey(),
            'user_id'=>$this->integer(),
            'hobby_id'=>$this->integer()
        ]);
    }

    public function down()
    {
        $this->dropTable('user_hobby');

        return true;
    }
}
