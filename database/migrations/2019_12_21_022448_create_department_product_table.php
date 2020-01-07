<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_product', function (Blueprint $table) {
            $table->unsignedInteger('department_department_id');
            $table->unsignedInteger('product_product_id');
            $table->primary(['department_department_id', 'product_product_id'],'department_product');
        //外部キー制約
            $table->foreign('department_department_id')
                  ->references('department_id')
                  ->on('departments')
                  ->onDelete('cascade');
            $table->foreign('product_product_id')
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
        Schema::dropIfExists('department_product');
    }
}
