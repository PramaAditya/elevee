<?php namespace Balkat\Unit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatUnitUnit extends Migration
{
    public function up()
    {
        Schema::rename('balkat_unit_', 'balkat_unit_unit');
        Schema::table('balkat_unit_unit', function($table)
        {
            $table->text('description');
            $table->string('video_link', 255)->nullable();
            $table->string('tour_link', 255)->nullable();
            $table->integer('bedroom_total');
            $table->integer('bathroom_total');
            $table->string('unit_floor', 255);
            $table->boolean('is_pet_allowed');
            $table->text('hero_slider_image')->nullable();
            $table->text('floorplan_image')->nullable();
            $table->text('unit_slider_image');
            $table->text('specification');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->renameColumn('image', 'unit_area');
        });
    }
    
    public function down()
    {
        Schema::rename('balkat_unit_unit', 'balkat_unit_');
        Schema::table('balkat_unit_', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('video_link');
            $table->dropColumn('tour_link');
            $table->dropColumn('bedroom_total');
            $table->dropColumn('bathroom_total');
            $table->dropColumn('unit_floor');
            $table->dropColumn('is_pet_allowed');
            $table->dropColumn('hero_slider_image');
            $table->dropColumn('floorplan_image');
            $table->dropColumn('unit_slider_image');
            $table->dropColumn('specification');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->renameColumn('unit_area', 'image');
        });
    }
}
