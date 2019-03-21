<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serial')->insert([
            [
                'title' => 'Vikings',
                'description' => 'Serial about hard men'
            ],
            [
                'title' => 'Rick and Morty',
                'description' => 'Serial about scientist and her grandchild'
            ],
        ]);
    }
}
