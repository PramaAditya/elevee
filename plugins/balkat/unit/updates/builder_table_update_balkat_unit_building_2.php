<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitBuilding2 extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_building', function($table)
        {
            $table->text('specifications')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_building', function($table)
        {
            $table->dropColumn('specifications');
        });
    }
}
