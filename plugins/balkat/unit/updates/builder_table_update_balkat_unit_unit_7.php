<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnit7 extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
