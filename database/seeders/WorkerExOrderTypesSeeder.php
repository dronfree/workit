<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerExOrderTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [[1, 9], [2, 8], [3, 7], [4, 6], [6, 4], [7, 3], [8, 2], [9, 1]];

        foreach ($arr as $row) {
            DB::table('workers_ex_order_types')->insert([
                'worker_id' => $row[0],
                'order_type_id' => $row[1],
            ]);
        }
    }
}
