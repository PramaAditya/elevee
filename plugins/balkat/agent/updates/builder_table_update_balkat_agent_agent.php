<?php namespace Balkat\Agent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatAgentAgent extends Migration
{
    public function up()
    {
        Schema::table('balkat_agent_agent', function($table)
        {
            $table->string('unique_id');
        });
    }
    
    public function down()
    {
        Schema::table('balkat_agent_agent', function($table)
        {
            $table->dropColumn('unique_id');
        });
    }
}
