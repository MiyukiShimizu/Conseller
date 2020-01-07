<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_product', function (Blueprint $table) {
            $table->unsignedBigInteger('area_id');
            $table->unsignedInteger('product_id');
            $table->primary(['area_id', 'product_id']);
        //外部キー制約
         $table->foreign('area_id')
         ->references('area_id')
         ->on('areas')
         ->onDelete('cascade');
         $table->foreign('product_id')
         ->references('product_id')
         ->on('products')
         ->onDelete('cascade');
        
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_product');
    }
}
