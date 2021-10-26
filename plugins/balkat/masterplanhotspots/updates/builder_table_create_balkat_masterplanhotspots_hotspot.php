<?php namespace Balkat\MasterplanHotspots\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatMasterplanhotspotsHotspot extends Migration
{
    public function up()
    {
        Schema::create('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('button_img');
            $table->integer('button_height');
            $table->integer('button_width');
            $table->text('tooltip_title');
            $table->smallInteger('tooltip_content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_masterplanhotspots_hotspot');
    }
}
