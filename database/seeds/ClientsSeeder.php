<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => Str::random(10),
            'mobile_phone' => Str::random(10),
            'address' => Str::random(10),
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
