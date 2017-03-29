<?php

use yii\db\Migration;

class m170329_180853_create_table_posts extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string(50),
            'body'=>$this->string(200),
            'userId'=>$this->integer()
        ]);
    }

    public function down()
    {
        $this->dropTable('post');

        return true;
    }
}
