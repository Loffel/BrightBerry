<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts5 extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
