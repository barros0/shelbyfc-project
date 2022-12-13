<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class TeamsTableSeeder extends Seeder
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
            ['name' => 'Shelby FC', 'images' => 'shelby_fc.png'],
            ['name' => 'SC Farense', 'images' => 'sc_farense.png'],
            ['name' => 'Estrela Amadora', 'images' => 'estrela_da_amadora.png'],
            ['name' => 'SL Benfica B', 'images' => 'sl_benfica.png'],
            ['name' => 'Vilafranquense', 'images' => 'ud_vilafranquense.png'],
            ['name' => 'Ac. Viseu', 'images' => 'academico_de_viseu.png'],
            ['name' => 'FC Porto B', 'images' => 'fc_porto.png'],
            ['name' => 'Leixões SC', 'images' => 'leixoes.png'],
            ['name' => 'CD Feirense', 'images' => 'cd_feirense.png'],
            ['name' => 'FC Penafiel', 'images' => 'fc_penafiel.png'],
            ['name' => 'CD Tondela', 'images' => 'cd_tondela.png'],
            ['name' => 'CD Mafra', 'images' => 'cd_mafra.png'],
            ['name' => 'CD Nacional', 'images' => 'cd_nacional.png'],
            ['name' => 'UD Oliveirense', 'images' => 'UD_Oliveirense.png'],
            ['name' => 'SCU Torreense', 'images' => 'Torreense.png'],
            ['name' => 'BSAD', 'images' => 'Belenenses.png'],
            ['name' => 'CD Trofense', 'images' => 'trofense.png'],
            ['name' => 'SC Covilhã', 'images' => 'covilha.png'],
        ];

        DB::table('teams')->insert($teams);
    }
}
