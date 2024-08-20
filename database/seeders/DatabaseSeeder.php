<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\PartnershipsSeeder;
use Database\Seeders\OrderTypesSeeder;
use Database\Seeders\OrdersSeeder;
use Database\Seeders\WorkersSeeder;
use Database\Seeders\OrderWorkerSeeder;
use Database\Seeders\WorkerExOrderTypesSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PartnershipsSeeder::class,
            UsersSeeder::class,
            OrderTypesSeeder::class,
            OrdersSeeder::class,
            WorkersSeeder::class,
            OrderWorkerSeeder::class,
            WorkerExOrderTypesSeeder::class,
        ]);
    }
}
