<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAuthUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_user', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name');
            $table->string('company_password');
            $table->rememberToken();
            $table->timestamps();
        });

        $test = new App\AuthUser();
        $test->company_name = 'test';
        $test->company_password = \Illuminate\Support\Facades\Hash::make('test');
        $test->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_user');
    }
}
