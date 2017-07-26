<?php namespace Inerba\MiniGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInerbaMinigallery extends Migration
{
    public function up()
    {
        Schema::create('inerba_minigallery_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('settings')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inerba_minigallery_');
    }
}