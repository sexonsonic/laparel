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
        $this->call(PostsTableSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(MusicsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
