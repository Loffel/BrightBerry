<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDookoProductsProdsTags extends Migration
{
    public function up()
    {
        Schema::create('dooko_products_prods_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('product_id')->unsigned();
            $table->integer('file_id')->unsigned();
            $table->primary(['product_id','file_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dooko_products_prods_tags');
    }
}
