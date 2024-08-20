<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('workers')->insert([
                'name' => 'worker' . $i,
                'second_name' => 'worker' . $i,
                'surname' => 'worker' . $i,
                'phone' => '8 800 123 45 6' . $i,
            ]);
        }
    }
}
