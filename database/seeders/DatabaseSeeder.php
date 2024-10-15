<?php

namespace Database\Seeders;

use App\Models\Fine;
use App\Models\License;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
//            UserSeeder::class,
            LicenseSeeder::class,
            CarSeeder::class,
            FineSeeder::class,
        ]);
    }
}
