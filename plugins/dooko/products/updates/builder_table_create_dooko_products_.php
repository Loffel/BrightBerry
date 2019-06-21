<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDookoProducts extends Migration
{
    public function up()
    {
        Schema::create('dooko_products_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('images');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dooko_products_');
    }
}
