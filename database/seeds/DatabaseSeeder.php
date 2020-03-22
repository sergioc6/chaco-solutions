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
        $this->call(UsersSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(ClientsSeeder::class);
    }
}
