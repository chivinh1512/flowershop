<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'vinhadmin', 'password' => '123456789', 'email' => 'vinhadmin@gmail.com', 'level' => 1],
        ]);
    }
}
