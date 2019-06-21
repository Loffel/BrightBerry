<?php namespace Dooko\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDookoProducts extends Migration
{
    public function up()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name')->change();
            $table->string('images')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dooko_products_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('name', 191)->change();
            $table->string('images', 191)->change();
        });
    }
}
