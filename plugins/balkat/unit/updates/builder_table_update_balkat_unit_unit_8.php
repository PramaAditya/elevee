<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnit8 extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->dropColumn('building_id');
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->integer('building_id');
        });
    }
}
