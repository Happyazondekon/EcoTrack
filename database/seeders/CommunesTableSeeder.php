<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        $communes = [
            // Alibori
            ['nom' => 'Banikoara', 'departement_id' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Gogounou', 'departement_id' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Kandi', 'departement_id' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Marimama', 'departement_id' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Malanville', 'departement_id' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Segbana', 'departement_id' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Atacora
            ['nom' => 'Boukoumbé', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Cobly', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Kérou', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Kouandé', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Matéri', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Natitingou', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ouassa-Péhunco', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Tanguiéta', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Toucountouna', 'departement_id' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Atlantique
            ['nom' => 'Abomey-Calavi', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Allada', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Kpomassè', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ouidah', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'So-Ava', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Toffo', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Tori-Bossito', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Zè', 'departement_id' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Borgou
            ['nom' => 'Bembérèkè', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Kalalè', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'N\'Dali', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Nikki', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Parakou', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Pèrèrè', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Sinendé', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Tchaourou', 'departement_id' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Collines
            ['nom' => 'Bantè', 'departement_id' => 5, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Dassa-Zoumè', 'departement_id' => 5, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Glazoué', 'departement_id' => 5, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ouèssè', 'departement_id' => 5, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Savalou', 'departement_id' => 5, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Savè', 'departement_id' => 5, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Couffo
            ['nom' => 'Aplahoué', 'departement_id' => 6, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Djakotomey', 'departement_id' => 6, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Dogbo', 'departement_id' => 6, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Klouékanmey', 'departement_id' => 6, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Lalo', 'departement_id' => 6, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Toviklin', 'departement_id' => 6, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Donga
            ['nom' => 'Bassila', 'departement_id' => 7, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Copargo', 'departement_id' => 7, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Djougou', 'departement_id' => 7, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ouaké', 'departement_id' => 7, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Littoral
            ['nom' => 'Cotonou', 'departement_id' => 8, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Mono
            ['nom' => 'Athiémé', 'departement_id' => 9, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Bopa', 'departement_id' => 9, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Comé', 'departement_id' => 9, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Grand-Popo', 'departement_id' => 9, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Houéyogbé', 'departement_id' => 9, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Lokossa', 'departement_id' => 9, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Ouémé
            ['nom' => 'Adjara', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Adjohoun', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Aguégués', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Akpro-Missérété', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Avrankou', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Bonou', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Dangbo', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Porto-Novo', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Sèmè-Podji', 'departement_id' => 10, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Plateau
            ['nom' => 'Adja-Ouèrè', 'departement_id' => 11, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ifangni', 'departement_id' => 11, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Kétou', 'departement_id' => 11, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Pobè', 'departement_id' => 11, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Sakété', 'departement_id' => 11, 'created_at' => $currentTime, 'updated_at' => $currentTime],

            // Zou
            ['nom' => 'Abomey', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Agbangnizou', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Bohicon', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Cove', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Djidja', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Ouinhi', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Zagnanado', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Za-Kpota', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['nom' => 'Zogbodomey', 'departement_id' => 12, 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ];

        DB::table('communes')->insert($communes);
    }
}
