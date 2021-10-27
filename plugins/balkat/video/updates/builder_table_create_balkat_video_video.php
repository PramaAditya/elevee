<?php namespace Balkat\Video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatVideoVideo extends Migration
{
    public function up()
    {
        Schema::create('balkat_video_video', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('description');
            $table->string('link_youtube', 255);
            $table->string('thumbnail', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_video_video');
    }
}
