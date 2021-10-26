<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitBuilding extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_building', function($table)
        {
            $table->text('units')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_building', function($table)
        {
            $table->dropColumn('units');
        });
    }
}
