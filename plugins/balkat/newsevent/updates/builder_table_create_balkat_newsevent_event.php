<?php namespace Balkat\NewsEvent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatNewseventEvent extends Migration
{
    public function up()
    {
        Schema::create('balkat_newsevent_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('content');
            $table->date('date');
            $table->time('time');
            $table->text('pictures');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_newsevent_event');
    }
}
