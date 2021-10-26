<?php namespace Balkat\MasterplanHotspots\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatMasterplanhotspotsHotspot extends Migration
{
    public function up()
    {
        Schema::table('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->smallInteger('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('balkat_masterplanhotspots_hotspot', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
