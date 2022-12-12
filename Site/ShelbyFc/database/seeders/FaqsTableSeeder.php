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
                'resposta' => 'É necessário registar nova conta selecionando a opção Sócio e inserir o seu número.<br>Ser-lhe-ão apresentados contactos existentes para validar o acesso.<br>No caso de falta de contactos associados, surgirá um alerta para contactar os serviços. ',
                'categoria' => 'informacoes'
            ],
            [
                'pergunta' => 'Sou Sócio e já não tenho acesso aos dados existentes para validação (email e contacto inativos)',
                'resposta' => 'No caso de dados inativos contactar os serviços: <br><span>Email: </span>suporte@shelbyfc.pt <br><span>Telefone:</span> +351 22 508 33 52',
                'categoria' => 'informacoes'
            ],
            [
                'pergunta' => 'Sou sócio mas gostaria de iniciar sessão com a minha conta Facebook, Google ou Apple.',
                'resposta' => ' necessário registar nova conta. <br>O email de registo terá que ser o mesmo da sua conta da plataforma selecionada.',
                'categoria' => 'informacoes'
            ],
            [
                'pergunta' => 'Os dados preenchidos no formulário de login refletem-se na ficha de sócio?',
                'resposta' => 'Não. Se quiser alterar alguma informação na ficha de sócio contacte os nossos serviços através:<br><span>Email: </span>suporte@shelbyfc.pt<span>Email: </span>suporte@shelbyfc.pt',
                'categoria' => 'informacoes'
            ],
            [
                'pergunta' => 'Sou sócio mas não me lembro do email associado.',
                'resposta' => 'Contacte, por favor, o serviço de apoio ao Sócio através do e-mail <span> suporte@shelbyfc.pt</span>',
                'categoria' => 'informacoes'
            ],
            [
                'pergunta' => 'Ao autenticar é-me apresentado uma janela de consentimentos, o que fazer?',
                'resposta' => 'É necessário aceitar os consentimentos.',
                'categoria' => 'criar_conta'
            ],
            [
                'pergunta' => 'Requisitos da Senha de acesso',
                'resposta' => 'A <span>senha de acesso</span> deverá ter:<br><br>Pelo menos um caracter não alfanumérico (. - ! - # - %)<br>Pelo menos um digito (0 - 9 )<br>Pelo menos um caracter maiúsculo (A - Z)<br>Pelo menos 8 caracteres<br>',
                'categoria' => 'criar_conta'
            ],
        ];

        DB::table('faqs')->insert($faqs);
    }
}
