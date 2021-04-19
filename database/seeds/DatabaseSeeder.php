<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //dd(UserSeeder::class);
        $this->call(UserSeeder::class);
        factory(App\Note::class, 20)->create();
    }
}
