<?php

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
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name'=>Str::random(10),
            'last_name'=>Str::random(10),
            'phone_number'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'password'=> Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name'=>'Mariana',
            'last_name'=>'Lopez',
            'phone_number'=>'546464654',
            'email'=>'mariana@gmail.com',
            'password'=> Hash::make('marianalopez'),
        ]);
    }
}
