<?php

namespace Database\Seeders\develop;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;
use Str;

/**
 * Class CustomersTableSeeder
 * @package develop
 */
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'email' => 'customer01@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password'),
                'name' => 'カスタマー一郎',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
