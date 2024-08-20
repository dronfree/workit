<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * 
     */
    public function run(): void
    {
        $password = Hash::make('demo123');
        for ($i = 1; $i < 10; $i++) {
            $name = 'manager' . $i;
            DB::table('users')->insert([
                'name' => $name,
                'email' => $name . '@test.com',
                'password' => $password,
                'partnership_id' => $i
            ]);
        }
    }
}
