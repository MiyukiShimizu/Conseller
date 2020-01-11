<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_generalname'); 
            $table->integer('company_id')->nullable();     
            $table->string('product_maker');
            $table->string('product_no'); 
            $table->integer('product_price'); 
            $table->string('product_distributor');
            $table->string('product_area')->nullable();
            $table->string('path')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
