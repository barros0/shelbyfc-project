<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('faqs')->truncate();
        Schema::enableForeignKeyConstraints();

        $faqs = [
            [
                'pergunta' => 'Sou sócio e já tinha conta na plataforma Shelby FC',
                'resposta' => 'É necessário registar nova conta selecionando a opção Sócio e inserir o seu número.<br>Ser-lhe-ão apresentados contactos existentes para validar o acesso.<br>No caso de falta de contactos associados, surgirá um alerta para contactar os serviços, através:',
                'categoria' => 'informacoes'
            ],
        ];

        DB::table('faqs')->insert($faqs);
    }
}
