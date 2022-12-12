<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class TeamsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('teams')->truncate();
        Schema::enableForeignKeyConstraints();

        $teams = [
            ['name' => 'Shelby FC', 'images' => 'images/liga/shelby_fc.png'],
            ['name' => 'SC Farense', 'images' => 'images/liga/sc_farense.png'],
            ['name' => 'Estrela Amadora', 'images' => 'images/liga/estrela_da_amadora.png'],
            ['name' => 'SL Benfica B', 'images' => 'images/liga/sl_benfica.png'],
            ['name' => 'Vilafranquense', 'images' => 'images/liga/ud_vilafranquense.png'],
            ['name' => 'Ac. Viseu', 'images' => 'images/liga/academico_de_viseu.png'],
            ['name' => 'FC Porto B', 'images' => 'images/liga/fc_porto.png'],
            ['name' => 'Leixões SC', 'images' => 'images/liga/leixoes.png'],
            ['name' => 'CD Feirense', 'images' => 'images/liga/cd_feirense.png'],
            ['name' => 'FC Penafiel', 'images' => 'images/liga/fc_penafiel.png'],
            ['name' => 'CD Tondela', 'images' => 'images/liga/cd_tondela.png'],
            ['name' => 'CD Mafra', 'images' => 'images/liga/cd_mafra.png'],
            ['name' => 'CD Nacional', 'images' => 'images/liga/cd_nacional.png'],
            ['name' => 'UD Oliveirense', 'images' => 'images/liga/UD_Oliveirense.png'],
            ['name' => 'SCU Torreense', 'images' => 'images/liga/Torreense.png'],
            ['name' => 'BSAD', 'images' => 'images/liga/Belenenses.png'],
            ['name' => 'CD Trofense', 'images' => 'images/liga/trofense.png'],
            ['name' => 'SC Covilhã', 'images' => 'images/liga/covilha.png'],
        ];

        DB::table('teams')->insert($teams);
    }
}
