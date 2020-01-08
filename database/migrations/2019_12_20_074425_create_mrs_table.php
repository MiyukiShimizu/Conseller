<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrs', function (Blueprint $table) {
            $table->increments('mr_id');
            $table->string('mr_name');
            $table->string('mr_address');
            $table->string('mr_tel');
            $table->string('mr_mail'); 
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
        Schema::dropIfExists('mrs');
    }
}
