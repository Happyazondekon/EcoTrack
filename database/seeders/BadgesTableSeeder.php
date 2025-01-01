<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        $badges = [
            ['nom' => 'Or', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Argent', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Bronze', 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ];

        DB::table('badges')->insert($badges);
    }
}
