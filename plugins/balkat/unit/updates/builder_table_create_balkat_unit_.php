<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatUnit extends Migration
{
    public function up()
    {
        Schema::create('balkat_unit_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_unit_');
    }
}
