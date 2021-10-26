<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnit5 extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->integer('bedroom_total');
            $table->integer('bathroom_total');
            $table->string('unit_area', 255);
            $table->string('unit_floor', 255);
            $table->boolean('is_pet_allowed');
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->dropColumn('bedroom_total');
            $table->dropColumn('bathroom_total');
            $table->dropColumn('unit_area');
            $table->dropColumn('unit_floor');
            $table->dropColumn('is_pet_allowed');
        });
    }
}
