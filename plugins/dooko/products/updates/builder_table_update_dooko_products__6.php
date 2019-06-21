<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts6 extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->string('seo_title')->nullable();
            $table->string('seo_description', 250);
            $table->string('seo_keywords');
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->dropColumn('seo_title');
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_keywords');
        });
    }
}
