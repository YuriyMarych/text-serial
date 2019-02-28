<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            [
                'role_id' => '1',
                'name' => 'Yuriy',
                'email' => 'stydentuss@gmail.com',
                'password' => bcrypt('123123'),
            ],
            [
                'role_id' => '2',
                'name' => 'Anna',
                'email' => 'qwerty@gmail.com',
                'password' => bcrypt('111111'),
            ],
            [
                'role_id' => '2',
                'name' => 'Nazar',
                'email' => 'pprtsm@gmail.com ',
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
