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
            ['name' => 'Shelby FC', 'image' => 'shelby_fc.png'],
            ['name' => 'SC Farense', 'image' => 'sc_farense.png'],
            ['name' => 'Estrela Amadora', 'image' => 'estrela_da_amadora.png'],
            ['name' => 'SL Benfica B', 'image' => 'sl_benfica.png'],
            ['name' => 'Vilafranquense', 'image' => 'ud_vilafranquense.png'],
            ['name' => 'Ac. Viseu', 'image' => 'academico_de_viseu.png'],
            ['name' => 'FC Porto B', 'image' => 'fc_porto.png'],
            ['name' => 'Leixões SC', 'image' => 'leixoes.png'],
            ['name' => 'CD Feirense', 'image' => 'cd_feirense.png'],
            ['name' => 'FC Penafiel', 'image' => 'fc_penafiel.png'],
            ['name' => 'CD Tondela', 'image' => 'cd_tondela.png'],
            ['name' => 'CD Mafra', 'image' => 'cd_mafra.png'],
            ['name' => 'CD Nacional', 'image' => 'cd_nacional.png'],
            ['name' => 'UD Oliveirense', 'image' => 'UD_Oliveirense.png'],
            ['name' => 'SCU Torreense', 'image' => 'Torreense.png'],
            ['name' => 'BSAD', 'image' => 'Belenenses.png'],
            ['name' => 'CD Trofense', 'image' => 'trofense.png'],
            ['name' => 'SC Covilhã', 'image' => 'covilha.png'],
        ];

        DB::table('teams')->insert($teams);
    }
}
