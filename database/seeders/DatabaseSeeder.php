<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'David',
            'email' => 'david@davidangel.net',
            'password' => Hash::make('password'),
        ]);

        DB::table('teams')->insert([
            'name' => 'David\'s Team',
            'user_id' => 1,
            'personal_team' => 1,
        ]);
        DB::table('quotes')->insert([
            'text' => Inspiring::quote(),
            'author' => '',
            'user_id' => 1,
            'team_id' => 1,
        ]);
    }
}
