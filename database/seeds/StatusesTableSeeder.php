<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'name' => 'Registered',
            ],
            [
                'name' => 'Paid',
            ],
            [
                'name' => 'Canceled',
            ]
        ];

        DB::table('statuses')->insert($statuses);
    }
}
