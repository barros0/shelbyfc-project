<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('terms')->truncate();
        Schema::enableForeignKeyConstraints();

        $terms = [
            [
                'titulo' => '<span>1. </span> Propriedade do site',
                'texto' => '<span>1.1. </span>O presente website (www.shelbyfc.pt) é o website oficial do Shelby Football Club online e o seu conteúdo integral é propriedade do Grupo Shelby Football Club <br><br><span>1.2. </span>Os atuais “Termos e Condições” regulam o acesso a este website, bem como a sua utilização. Ao aceder a qualquer parte ou secção deste website, ao utilizá-lo, ou a qualquer outro serviço a ele vinculado, o utilizador declara a aceitação destes “Termos e Condições”, vinculando-se a toda e qualquer obrigação constante do presente documento. Se você não aceitar isso, pare de usar este site imediatamente. <br><br><span>1.3. </span>O Grupo Shelby Football Club reserva-se o direito de alterar o conteúdo e os serviços deste website, aplicando-se o mesmo aos presentes “Termos e Condições”, a qualquer momento, sem aviso prévio, e as alterações serão consideradas em entrarão em vigor assim que forem publicadas neste site. A aceitação será assumida caso o utilizador continue a utilizar o website após a entrada em vigor das alterações. Portanto, o usuário é aconselhado pelo Grupo Shelby Football Club a verificar regularmente os “Termos e Condições” para confirmar qualquer atualização e alteração. <br><br> <span>1.4. </span> O Grupo Shelby Football Club também se reserva o direito de, a qualquer momento e sem aviso prévio, remover o site e seu conteúdo, bem como o direito de, a qualquer momento e sem aviso prévio, limitar, negar ou interromper, parcial ou total, o acesso ao site a qualquer usuário. <br><br><span>1.5. </span>Os direitos mencionados nesta seção podem ser exercidos pelo Grupo Shelby Football Club sem a necessidade de apresentar qualquer motivo relevante. <br><br> <span>1.6. </span>A ShelbyComercial – Sociedade de Comercialização, Licenciamento e Patrocínio, S.A. é proprietária da loja online presente neste website. <br><br><span>1.7. </span>Ao adquirir qualquer bem ou serviço neste website, o utilizador declara ter conhecimento de que está a celebrar um contrato com a ShelbyComercial - Sociedade de Comercialização, Licenciamento e Patrocínio, S.A., empresa com o registo único 503 709 794 , sentado no Estádio do Dragão, Via Shelby Football Club, Entrada Nascente, piso 3, 4350-415 Shelby.<br>',
                'categoria' => 'property'
            ],
            [
                'titulo' => '<span>2. </span> Privacidade',
                'texto' => '<span>2.1. </span>Os dados pessoais recolhidos durante a utilização, por um particular, deste website serão estritamente tratados de acordo com a nossa “Política de Privacidade e Proteção de Dados”, que pode ser consultada <br><br> <span>2.2 </span>Esta website utiliza cookies, de forma a melhorar a experiência do utilizador e oferecer um serviço mais eficiente. Para mais informações, consulte aqui a nossa “Política de Privacidade e Proteção de Dados”.<br>',
                'categoria' => 'privacy'
            ],
            [
                'titulo' => '<span>3. </span> Propriedade intelectual',
                'texto' => '<span>3.1. </span>Todo o conteúdo publicado neste site é de propriedade do Grupo Shelby Football Club. No entanto, podem ocorrer situações em que o conteúdo publicado pertença a terceiros. Nesses casos, tal conteúdo só será disponibilizado após a autorização do legítimo proprietário.<br>',
                'categoria' => 'intellectual'
            ],
            [
                'titulo' => '<span>4. </span> Responsibilidade',
                'texto' => '<span>4.1. </span>O Grupo Shelby Football Club não garante ao usuário que os conteúdos ou serviços fornecidos neste site atendam ou sejam adequados para atender a quaisquer necessidades ou expectativas do usuário. Com efeito, o website pode conter imprecisões ou erros, independentemente de o Grupo Shelby Football Club procurar agir com o maior rigor possível na sua atividade.<br>',
                'categoria' => 'responsibility'
            ],
            [
                'titulo' => '<span>5. </span> Cadastro',
                'texto' => '<span>5.1. </span>Existe a possibilidade de o usuário ser solicitado a se registrar no site para ter acesso a áreas específicas e usar funções, serviços ou componentes.<br>',
                'categoria' => 'registration'
            ],
            [
                'titulo' => '<span>6. </span> Responsabilidade do Utilizador',
                'texto' => '<span>6.1. </span>Nenhum material enviado para os endereços de e-mail contidos no site (por exemplo shelbyfc@shelbyfc.pt; geral@shelbyfc.pt; servicoaocliente@shelbyfc.pt, entre outros) conterá conteúdo difamatório, ofensivo, vexatório, pornográfico, obsceno, intimidador , racista, instigador de qualquer prática de ato ilícito, ou violador de qualquer direito de terceiros, incluindo, a título de exemplo, qualquer direito autoral.<br>',
                'categoria' => 'user'
            ],
            [
                'titulo' => '<span>7. </span> Venda de produtos e serviços de varejo através do site',
                'texto' => '<span>7.1. </span>A presente cláusula aplica-se apenas à compra e venda de bens e serviços e não a bilhetes, adesão ou Assentos Anuais.<br>',
                'categoria' => 'sale'
            ],

            [
                'titulo' => '<span>8. </span> Shelby FC Membro',
                'texto' => '<span>8.1. </span>Ao se registrar como membro, o usuário aceita estes “Termos e Condições”.<br>',
                'categoria' => 'member'
            ],
            [
                'titulo' => '<span>9. </span> Shelby FC Bilhete da Temporada',
                'texto' => '<span>9.1. </span>A aquisição do Season Ticket é exclusiva para Membros do Shelby FC.<br>',
                'categoria' => 'ticket'
            ],
            [
                'titulo' => '<span>10. </span> Compra e Venda de Ingressos',
                'texto' => '<span>10.1. </span>A partir deste site é possível adquirir bilhetes para os jogos de futebol do Shelby Football Club - Futebol, SAD.<br>',
                'categoria' => 'purchase_sale'
            ],
            [
                'titulo' => '<span>11. </span> Considerações Finais',
                'texto' => '<span>11.1. </span>Caso qualquer disposição deste documento seja declarada nula, ineficaz ou venha a ser anulada, tal fato não afetará a validade ou eficácia das demais cláusulas, que permanecerão integralmente em vigor, nos termos do artigo 292 do Código Civil.<br>',
                'categoria' => 'final_consideration'
            ],
        ];

        DB::table('terms')->insert($terms);
    }
}

