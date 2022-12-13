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
                'title' => 'ADEPTOS DO SHELBY FC RUMAM A FILADÉLFIA PARA A SEGUNDA LIGA EM DIRETO',
                'small_description' => 'Centenas de adeptos da Cidade dos Eua e membros de Clubes Oficiais de Adeptos dirigiram-se a Filadélfia para o maior evento de sempre da Segunda Liga Live.',
                'body' => 'Arranca a preparação para a receção ao SC Farense, da 3.ª jornada da Segunda Liga<br>Depois da vitória em Chaves (2-0), o FC Porto regressa ao trabalho na segunda-feira no Centro de Treinos e Formação Desportiva PortoGaia, no Olival.<br>A sessão (10h30) marca o arranque da preparação para o jogo da 3.ª jornada do grupo A da Taça da Liga, em que os Dragões recebem o Vizela na sexta-feira (20h30, Sport TV).',
                'image' => 'noticia1.jpg',
            ],
            [
                'title' => 'Shelby FC v CD Mafra ',
                'small_description' => 'TICKETING INFORMATION',
                'body' => 'O Clube recebeu uma dotação de 2.947 bilhetes, incluindo 18 baías de cadeira de rodas e uma série de bilhetes para adeptos ambulantes.',
                'image' => 'noticia2.jpg',
            ],
        ];

        DB::table('news')->insert($news);
    }
}
