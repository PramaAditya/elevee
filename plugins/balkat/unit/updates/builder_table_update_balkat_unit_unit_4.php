<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnit4 extends Migration
{
    public function up()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->text('description');
            $table->string('video_link', 255)->nullable();
            $table->string('tour_link', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('video_link');
            $table->dropColumn('tour_link');
        });
    }
}
