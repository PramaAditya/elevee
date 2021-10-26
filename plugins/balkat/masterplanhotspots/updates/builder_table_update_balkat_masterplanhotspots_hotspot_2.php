<?php namespace Balkat\MasterplanHotspots\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatMasterplanhotspotsHotspot2 extends Migration
{
    public function up()
    {
        Schema::table('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->integer('button_left')->default(0);
            $table->integer('button_top')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->dropColumn('button_left');
            $table->dropColumn('button_top');
        });
    }
}
