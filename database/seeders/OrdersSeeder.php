<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 10; $i++) {
            $name = 'company' . $i;
            DB::table('orders')->insert([
                'type_id' => $i,
                'partnership_id' => $i,
                'user_id' => $i,
                'description' => '',
                'date' => date("Y-m-d H:i:s"),
                'address' => '',
                'amount' => 99,
            ]);
        }
    }
}
