<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        $departements = [
            ['nom' => 'Alibori', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Atacora', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Atlantique', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Borgou', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Collines', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Couffo', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Donga', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Littoral', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Mono', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ouémé', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Plateau', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Zou', 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ];

        DB::table('departements')->insert($departements);
    }
}
