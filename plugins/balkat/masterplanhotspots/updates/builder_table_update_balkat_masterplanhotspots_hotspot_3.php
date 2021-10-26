<?php namespace Balkat\MasterplanHotspots\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatMasterplanhotspotsHotspot3 extends Migration
{
    public function up()
    {
        Schema::table('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->integer('button_height')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->integer('button_height')->nullable(false)->change();
        });
    }
}
