<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('news')->truncate();
        Schema::enableForeignKeyConstraints();

        $news = [
            [
                'title' => 'REGRESSO AO TRABALHO ESTA SEGUNDA-FEIRA',
                'body' => 'Arranca a preparação para a receção ao SC Farense, da 3.ª jornada da Segunda Liga<br>Depois da vitória em Chaves (2-0), o FC Porto regressa ao trabalho na segunda-feira no Centro de Treinos e Formação Desportiva PortoGaia, no Olival.<br>A sessão (10h30) marca o arranque da preparação para o jogo da 3.ª jornada do grupo A da Taça da Liga, em que os Dragões recebem o Vizela na sexta-feira (20h30, Sport TV).',
                'image' => 'img/nico-oreilly.webp',
                'categoria' => 'SegundaLiga'
            ],
        ];

        DB::table('news')->insert($news);
    }
}
