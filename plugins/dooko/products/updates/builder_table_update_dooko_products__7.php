<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts7 extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->string('seo_description', 250)->nullable()->change();
            $table->string('seo_keywords', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->string('seo_description', 250)->nullable(false)->change();
            $table->string('seo_keywords', 191)->nullable(false)->change();
        });
    }
}
