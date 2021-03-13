<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HamsterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
         'id' => '9', 
      ];
      DB::table('hamsters')->insert($param);

      $param = [
         'id' => '18', 
             ];
      DB::table('hamsters')->insert($param);

    }
}
