<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDookoProductsProdsCats extends Migration
{
    public function up()
    {
        Schema::create('dooko_products_prods_cats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('category_id');
            $table->primary(['product_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dooko_products_prods_cats');
    }
}
