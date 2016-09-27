<?php

use yii\db\Migration;

class m160927_190827_create_noticia extends Migration
{
    public function up()
    {
      $this->createTable('noticias',[
         'id'=>$this->primaryKey(),
         'titulo'=>$this->string(255),
         'corpo'=>$this->string(255),
         'status_noticia'=>$this->integer()
      ]);
    }

    public function down()
    {
        echo "m160927_190827_create_noticia cannot be reverted.\n";

        return false;
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
