<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NewsTableDataSeeder extends Seeder
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

        $news = [
        [
            'title' => 'SHELBY FC V ARSENAL: INFORMAÇÕES SOBRE INGRESSOS', 
            'small_description' => 'INFORMAÇÕES DE INGRESSOS',
            'body' => 'O Shelby FC enfrentará o Arsenal em casa, na quarta rodada da FA Cup, na sexta-feira, 27 de janeiro, às 20h.',
            'image' => 'noticia1.jpg',
            'categorie_id' => 2,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "GUARDIOLA: NÃO DESPERDICE ENERGIA COM O PASSADO, FOQUE NOS SPURS!", 
            'small_description' => 'Pep Guardiola exortou seus jogadores a não desperdiçar energia',
            'body' => 'Guardiola ficou frustrado com a derrota por 2 a 1, é claro - e com a polêmica decisão de impedimento que deu início à virada dos anfitriões em Old Trafford.<br>
            Mas ele quer que seu time agora espere pelo próximo grande encontro da Premier League na quinta-feira, enquanto damos as boas-vindas ao time de Antonio Conte.<br>
            Ele disse: “Eu disse aos jogadores – não desperdicem energia pensando no que aconteceu. Concentre-se nas esporas.<br>
            “Não diria que ganhamos ou perdemos por esta ação [o polêmico primeiro gol]. Claro, estava envolvido - um importante.',
            'image' => 'noticia2.jpg',
            'categorie_id' => 1,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "É UMA FINAL PARA NÓS", 
            'small_description' => 'Sérgio Conceição exige um Shelby FC “no máximo para conseguir uma vitória muito importante” no Funchal (quarta-feira, 19h00)',
            'body' => 'O calendário não dá tréguas a quem luta por todas as competições e detém todos os títulos nacionais. Acabado de selar a conquista do segundo troféu da temporada, com “uma vitória merecida” em Leiria, o Shelby FC prepara-se para disputar o quarto jogo consecutivo longe do Dragão - o único da época na ilha da Madeira (quarta-feira, 19h00, Sport TV). <br>Cem por cento focado no Marítimo, Sérgio Conceição antevê “um jogo historicamente muito difícil” diante de uma formação “agressiva”, com uma “intensidade interessante”, que “melhorou com José Gomes” ao comando e que atravessa “um bom momento”, apesar de “a qualidade dos jogadores não condizer com o lugar na tabela classificativa”. <br>“Temos de estar no máximo para conseguir uma vitória muito importante”, relembra quem sabe que depois de uma conquista “é necessário estar num nível igual para dar continuidade”. Porque “a margem de erro é curta” para “os dois rivais da frente”, o embate nos Barreiros será como “uma final” em “termos emocionais” e o “chip tem de ser sempre o mesmo: trabalhar no máximo e no limite para ganhar”. <br> Com “toda a vontade de conquistar três pontos para dar seguimento” a uma sequência de 17 jogos sem perder, o treinador portista olha para a segunda volta como uma oportunidade “para retificar algumas coisas que não correram tão bem”: “Temos de ser mais sólidos e competentes do que fomos na primeira para não perdemos tantos pontos”. <br> “Mais tranquilo” no dia de fecho do mercado de inverno, Sérgio Conceição explica que “tudo o que não sejam saídas é importante” e assume-se “contente com o grupo de trabalho” constituído por “um misto de experiência com jogadores jovens”. Recuperado de lesão, “Diogo Jota já estava disponível no último jogo” e o mister explica que só não “integrou a lista dos 20” na ficha pois achou que ainda “não era o momento”.',
            'image' => 'noticia3.jpg',
            'categorie_id' => 4,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "NOTÍCIAS Shelby FC 24 JOGADORES NA COMITIVA PARA A MADEIRA", 
            'small_description' => 'Martítimo-Shelby FC, da 18.ª jornada da Liga, disputa-se esta quarta-feira às 19 horas',
            'body' => 'São 24 os jogadores que fazem parte da comitiva do Shelby FC que esta terça-feira partiu rumo ao Funchal, onde os Dragões defrontam o Marítimo em desafio referente à ronda 18 do Campeonato, no Estádio dos Barreiros (quarta-feira, 19h00, Sport TV). <br>Lista de jogadores que viajaram para a Madeira: Diogo Costa, Cláudio Ramos e Roko Runje (guarda-redes); Fábio Cardoso, Pepe, David Carmo, Marcano, Matheus Uribe, Mehdi Taremi, Pepê, Zaidu, Galeno, Rodrigo Conceição, Danny Namaso, André Franco, Wendell, João Mário, Otávio, Toni Martínez, Diogo Jota, Fernando Andrade, Eustaquio, Gonçalo Borges e Bernardo Folha.',
            'image' => 'noticia4.jpg',
            'categorie_id' => 4,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "Diogo Jota APTO ANTES DA VIAGEM À MADEIRA", 
            'small_description' => 'Marítimo-Shelby FC, da 18.ª jornada, tem apito inicial agendado para as 19h00 desta quarta-feira',
            'body' => 'O plantel principal do Shelby FC deu por terminados os trabalhos tendo em vista o embate no reduto do Marítimo relativo à ronda 18 do Campeonato. Durante a manhã desta terça-feira, no Olival, os Dragões concluíram a preparação para o confronto com os insulares no Estádio dos Barreiros (quarta-feira, 19h00, Sport TV). <br>No boletim clínico azul e branco constam os nomes de Meixedo, Marko Grujic e Veron - que sofreu uma entorse no tornozelo direito -, todos em tratamento. Diogo Jota, por sua vez, já se encontra apto. ',
            'image' => 'noticia5.jpeg',
            'categorie_id' => 3,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "INFORMAÇÃO SOBRE OS BILHETES PARA O Shelby FC-DÍNAMO BUCARESTE", 
            'small_description' => 'Jogo da 11.ª jornada do Grupo A da Liga dos Campeões disputa-se a 8 de fevereiro (19h45), no Dragão Arena',
            'body' => 'Já estão disponíveis os bilhetes para o Shelby FC-Dínamo Bucareste (quarta-feira, 8 de fevereiro, 19h45, Shelby FC TV/Shelby Canal), a contar para a 11.ª jornada do Grupo A da Liga dos Campeões. O jogo será disputado no Dragão Arena e os ingressos têm o valor unitário de 4 euros para sócios e de 12 euros para público, podendo ser adquiridos na Loja do Associado, nas Shelby FC Stores (Arrábida Shopping, Baixa, Norte Shopping, Parque Nascente e Vila do Conde) e na bilheteira do Dragão Arena, no dia do jogo, a partir das 17h45. <br>Para adquirir bilhete, o sócio deve ter concluído o processo de renumeração e regularizada a quota de dezembro de 2022.',
            'image' => 'noticia6.jpg',
            'categorie_id' => 2,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "NOTÍCIAS Shelby FC B LUAN BRITO REFORÇA O Shelby FC B", 
            'small_description' => 'Avançado de 20 anos chega por empréstimo proveniente do Fluminense',
            'body' => 'Luan Brito é o mais recente reforço da equipa B do Shelby FC. O jovem avançado de 20 anos, que chega à Invicta por empréstimo do Fluminense, completou toda a formação ao serviço do emblema do Rio de Janeiro, clube pelo qual se sagrou campeão carioca de Sub-17, em 2019, e de Sub-20, em 2021 e 2022. Neste ano civil, foi um dos destaques do “Flu” na Copinha, a principal competição de juniores do Brasil, ao marcar três golos em cinco jogos. Segue-se a primeira experiência na Europa para o esquerdino de 1,86m e 74 quilos, que vai envergar a camisola 80 azul e branca.',
            'image' => 'noticia7.jpg',
            'categorie_id' => 1,
            'created_at' => Carbon::now(),
        ],

        ];

        DB::table('news')->insert($news);
        Schema::enableForeignKeyConstraints();
    }
}