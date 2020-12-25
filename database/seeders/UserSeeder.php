<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'birth_date' => Carbon::parse('1111-11-11')->format('Y-m-d'),
            'joined_date' => Carbon::parse('2222-11-11')->format('Y-m-d'),
            'is_admin' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Luby Sagia',
            'email' => 'lubysagia@gmail.com',
            'password' => bcrypt('123456'),
            'birth_date' => Carbon::parse('1111-11-11')->format('Y-m-d'),
            'joined_date' => Carbon::parse('2222-11-11')->format('Y-m-d'),
            'is_admin' => 1
        ]);
        User::factory()->times(50)->create();
    }
}
