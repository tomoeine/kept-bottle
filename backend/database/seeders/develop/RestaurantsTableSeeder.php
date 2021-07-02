<?php

namespace Database\Seeders\develop;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;
use Str;

/**
 * Class RestaurantsTableSeeder
 * @package Database\Seeders\develop
 */
class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'id' => 1,
                'name' => 'もも鐵 えん',
                'longitude' => 31.9165262,
                'latitude' => 131.4211783,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'しろきじ青空市場店',
                'longitude' => 31.9124921,
                'latitude' => 131.419487,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'とりとみ',
                'longitude' => 31.9152558,
                'latitude' => 131.418368,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
