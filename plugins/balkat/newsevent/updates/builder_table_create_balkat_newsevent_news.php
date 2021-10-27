<?php namespace Balkat\NewsEvent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatNewseventNews extends Migration
{
    public function up()
    {
        Schema::create('balkat_newsevent_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('content');
            $table->date('published_date');
            $table->text('pictures')->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->string('link_youtube', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_newsevent_news');
    }
}
