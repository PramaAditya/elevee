<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatUnitBuildingUnit extends Migration
{
    public function up()
    {
        Schema::create('balkat_unit_building_unit', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('building_id');
            $table->integer('unit_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_unit_building_unit');
    }
}
