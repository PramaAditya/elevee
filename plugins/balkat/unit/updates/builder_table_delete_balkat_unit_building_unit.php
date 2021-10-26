<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBalkatUnitBuildingUnit extends Migration
{
    public function up()
    {
        Schema::dropIfExists('balkat_unit_building_unit');
    }
    
    public function down()
    {
        Schema::create('balkat_unit_building_unit', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('building_id');
            $table->integer('unit_id');
        });
    }
}
