<?php namespace Balkat\Agent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatAgentAgent2 extends Migration
{
    public function up()
    {
        Schema::table('balkat_agent_agent', function($table)
        {
            $table->string('name', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_agent_agent', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
