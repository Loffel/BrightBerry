<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDookoProductsProductsCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dooko_products_products_categories');
    }
    
    public function down()
    {
        Schema::create('dooko_products_products_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('category_id');
        });
    }
}
