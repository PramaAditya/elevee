<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnitcategory extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_unitcategory', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_unitcategory', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
