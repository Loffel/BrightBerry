<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDookoProductsProdsCats extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dooko_products_prods_cats');
    }
    
    public function down()
    {
        Schema::create('dooko_products_prods_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('category_id');
            $table->primary(['product_id','category_id']);
        });
    }
}
