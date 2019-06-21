<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts2 extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->dropColumn('images');
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->string('images', 191);
        });
    }
}
