<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts4 extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->text('description_short');
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->dropColumn('description_short');
        });
    }
}
