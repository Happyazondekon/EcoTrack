<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(DepartementsTableSeeder::class);
        $this->call(CommunesTableSeeder::class);
        $this->call(ArrondissementsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(BadgesTableSeeder::class);
    }
}
