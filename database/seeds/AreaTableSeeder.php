<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert([
            [ 'area_name' => '東京'],
            [ 'area_name' => '大阪'],
            ]);
    }
}
