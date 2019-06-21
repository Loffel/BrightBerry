<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts3 extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->integer('category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
