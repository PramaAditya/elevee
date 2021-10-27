<?php namespace Balkat\Brochure\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatBrochureBrochure extends Migration
{
    public function up()
    {
        Schema::create('balkat_brochure_brochure', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('picture', 255);
            $table->string('file_pdf', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_brochure_brochure');
    }
}
