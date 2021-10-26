<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatUnitUnitcategory extends Migration
{
    public function up()
    {
        Schema::create('balkat_unit_unitcategory', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 40);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_unit_unitcategory');
    }
}
