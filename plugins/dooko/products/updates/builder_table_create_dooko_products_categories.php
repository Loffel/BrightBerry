<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDookoProductsCategories extends Migration
{
    public function up()
    {
        Schema::create('dooko_products_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dooko_products_categories');
    }
}
