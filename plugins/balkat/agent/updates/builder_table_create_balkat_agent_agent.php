<?php namespace Balkat\Agent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatAgentAgent extends Migration
{
    public function up()
    {
        Schema::create('balkat_agent_agent', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email', 255);
            $table->string('telephone', 255);
            $table->string('whatsapp_link', 255);
            $table->string('photo', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_agent_agent');
    }
}
