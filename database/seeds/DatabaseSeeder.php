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
                'firstName' => 'Yuriy',
                'lastName' => 'Marych',
                'email' => 'stydentuss@gmail.com',
                'password' => bcrypt('123123'),
            ],
            [
                'firstName' => 'Anna',
                'lastName' => 'White',
                'email' => 'qwerty@gmail.com',
                'password' => bcrypt('111111'),
            ],
            [
                'firstName' => 'Nazar',
                'lastName' => 'Vovk',
                'email' => 'pprtsm@gmail.com ',
                'password' => bcrypt('123456'),
            ]
        ]);

        $this->call(RoleSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(SerialSeeder::class);
    }
}
