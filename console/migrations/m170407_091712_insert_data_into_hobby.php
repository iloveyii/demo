<?php

use yii\db\Migration;

class m170407_091712_insert_data_into_hobby extends Migration
{
    public function up()
    {
        $this->insert('hobby', ['name'=>'Sports']);
        $this->insert('hobby', ['name'=>'TV']);
        $this->insert('hobby', ['name'=>'Music']);
        $this->insert('hobby', ['name'=>'Movie']);
    }

    public function down()
    {
        $this->truncateTable('hobby');
    }
}
