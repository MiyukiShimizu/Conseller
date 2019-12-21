<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('report_id');
            $table->string('report_name');
            $table->string('report_date');
            $table->string('report_hospital');
            $table->string('report_department');  
            $table->string('report_product');  
            $table->string('report_comment')->nullable(); 
            $table->string('report_salesnumber')->nullable(); 
            $table->string('report_salesprice')->nullable();           
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
        Schema::dropIfExists('reports');
    }
}
