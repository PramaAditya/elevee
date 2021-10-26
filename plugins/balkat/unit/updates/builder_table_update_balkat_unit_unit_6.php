<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnit6 extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->integer('building_id');
            $table->text('hero_slider_image')->nullable();
            $table->text('floorplan_image')->nullable();
            $table->text('unit_slider_image')->nullable();
            $table->text('specification')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->dropColumn('building_id');
            $table->dropColumn('hero_slider_image');
            $table->dropColumn('floorplan_image');
            $table->dropColumn('unit_slider_image');
            $table->dropColumn('specification');
        });
    }
}
