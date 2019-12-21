<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::insert([
    		[ 'department_name' => '内科'],
    		[ 'department_name' => '消化器外科'],
    		[ 'department_name' => '整形外科'],
        ]);
    }
}
