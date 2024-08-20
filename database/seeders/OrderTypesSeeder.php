<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'education',
            'lawyer',
            'chef',
            'construction',
            'electrician',
            'government',
            'arts',
            'healthcare',
            'accountant',
        ];

        foreach($types as $name) {
            DB::table('order_types')->insert([
                'name' => $name,
            ]);
        }
    }
}
