<?php

use yii\db\Migration;

class m170407_091230_create_table_hobby extends Migration
{
    public function up()
    {
        $this->createTable('hobby', [
            'id'=>$this->primaryKey(),
            'name'=>$this->string(50),
            'description'=>$this->string(200),
        ]);
    }

    public function down()
    {
        $this->dropTable('hobby');

        return true;
    }
}
