<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('houses')->insert([
           [
               'house_number' => '001',
               'image_path' => 'assets/images/house2.jpeg',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

           ],
           [
               'house_number' => '002',
               'image_path' => 'assets/images/house2.jpeg',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),


           ],
           [
               'house_number' => '003',
               'image_path' => 'assets/images/house2.jpeg',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),


           ],
           [
               'house_number' => '004',
               'image_path' => 'assets/images/house2.jpeg',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),


           ],
           [
               'house_number' => '005',
               'image_path' => 'assets/images/house2.jpeg',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),


           ],
           [
               'house_number' => '006',
               'image_path' => 'assets/images/house2.jpeg',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
           ]
        ]);
    }
}
