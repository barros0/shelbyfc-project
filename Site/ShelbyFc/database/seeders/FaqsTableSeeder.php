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
                'resposta' => ' Necessário registar nova conta. <br>O email de registo terá que ser o mesmo da sua conta da plataforma selecionada.',
                'categoria' => 'informacoes'
            ],
            [
                'pergunta' => 'Os dados preenchidos no formulário de login refletem-se na ficha de sócio?',
                'resposta' => 'Não. Se quiser alterar alguma informação na ficha de sócio contacte os nossos serviços através:<br><span>Email: </span>suporte@shelbyfc.pt<br><span>Telefone:</span> +351 22 508 33 52',
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
            [
                'pergunta' => 'Ao autenticar apresenta um formulário para validar?',
                'resposta' => 'Deverá seguir as instruções. De seguida terá que selecionar um dos métodos de verificação: SMS ou email.',
                'categoria' => 'criar_conta'
            ],
            [
                'pergunta' => 'Não tenho conta criada. Posso criar uma conta para acesso às plataformas Shelby FC?',
                'resposta' => 'Sim, deverá introduzir um email e password e, de seguida, selecionar <span>"Registar nova conta".</span>',
                'categoria' => 'criar_conta'
            ],
            [
                'pergunta' => 'De que forma são regulados os jogos de casino da Shelby FC?',
                'resposta' => 'Todos os jogos que estão disponíveis na SHELBY FC são devidamente certificados pela entidade reguladora do jogo online em Portugal, o SRIJ.<br>Para além do mais, todos estes jogos são providenciados por entidades certificadas, sendo que o nosso casino não tem qualquer controlo relativamente a quaisquer resultados.<br>Sendo assim, os resultados de cada jogada são completamente aleatórios e independentes da SHELBY FC.',
                'categoria' => 'jogos_apostas'
            ],
            [
                'pergunta' => 'Como faço uma aposta desportiva?',
                'resposta' => 'Para colocar uma aposta desportiva, tens de escolher pelo menos uma seleção para que esta seja adicionada ao boletim de apostas.<br>Seguidamente, deves definir o valor que pretendes apostar no boletim de apostas.<br>Podes colocar apostas simples (com apenas uma seleção), múltiplas (com várias seleções) ou combinadas (que englobam várias combinações de apostas múltiplas e simples).<br>No boletim de apostas encontrarás informação relevante sobre a tua aposta, como o valor da odd, o custo da aposta e os ganhos potenciais. No nosso blog temos um artigo sobre as diferenças entre os tipos de apostas que te poderá ajudar a decidir.',
                'categoria' => 'jogos_apostas'
            ],
            [
                'pergunta' => 'O que são odds?',
                'resposta' => 'Odds (ou "cotas") são valores numéricos que são atribuídos a um determinado evento, consoante a probabilidade de o mesmo ocorrer. Quanto mais improvável for o resultado, maior será a odd. Comparativamente, quanto mais provável for o resultado, menor será o seu valor.<br>É importante mencionar que o valor de uma odd não é estático, variando desde o momento em que é criada até ao momento em que já não está disponível.<br>As odds permitem calcular o prémio oferecido ao jogador, servindo de "multiplicador" da aposta: quando colocas uma aposta, o valor da odd será multiplicado pelo valor da tua aposta de forma a obteres o valor dos teus ganhos.<br>Por exemplo, se a odd da seleção em que apostares for de 2.50, e o valor apostado for €10, os teus ganhos serão de €25 (no caso de uma aposta bem sucedida).',
                'categoria' => 'jogos_apostas'
            ],
            [
                'pergunta' => 'Qual o valor mínimo que poderei depositar e levantar?',
                'resposta' => 'O valor mínimo de depósito é de 10€. O valor mínimo de levantamento é de 0,01€.',
                'categoria' => 'depositos_levantamentos'
            ],
            [
                'pergunta' => 'Quais são os Métodos de Pagamento disponíveis na Shelby FC?',
                'resposta' => 'Na Shelby FC, podes efetuar depósitos através de Multibanco, MB WAY, Maestro, Visa, Mastercard, Skrill, Netteler, Paypal e Paysafecard.<br>No que diz respeito aos levantamentos, poderão ser feitos através de Cartão de Crédito Visa, transferência bancária/SEPA, Skrill, Neteller e Paypal.<br>Caso não encontres o método que queres utilizar, por favor contacta o Serviço de Apoio ao Cliente.',
                'categoria' => 'depositos_levantamentos'
            ],
            [
                'pergunta' => 'Os meus depósitos terão taxas associadas?',
                'resposta' => 'Não, os teus depósitos não terão qualquer encargo para ti por parte da Shelby FC. Contudo, poderão existir taxas aplicadas pelo teu banco ou método de pagamento, aos quais a Shelby FC é alheia.<br>Por favor, informa-te junto do teu banco ou método de pagamento relativamente às mesmas.',
                'categoria' => 'depositos_levantamentos'
            ],
        ];

        DB::table('faqs')->insert($faqs);
    }
}
