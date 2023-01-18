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
            'title' => 'SHELBY FC V ARSENAL: TICKET INFORMATION', 
            'small_description' => 'TICKET INFORMATION',
            'body' => 'Shelby FC will play Arsenal at home, in round 4 of the FA Cup on Friday 27th January, kick-off 8pm.',
            'image' => 'noticia1.jpg',
            'categorie_id' => 2,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "GUARDIOLA: DON'T WASTE ENERGY ON THE PAST, FOCUS ON SPURS!", 
            'small_description' => 'Pep Guardiola has urged his players not to waste energy',
            'body' => 'Guardiola was frustrated with the 2-1 loss, of course - and the controversial offside decision that started the comeback for the hosts at Old Trafford.<br>
            But he wants his team to now look ahead to Thursday’s next big Premier League encounter, as we welcome Antonio Conte’s team.<br>
            He said: “I said to the players – don’t waste energy thinking what happened. Focus on Spurs.<br>
            “I would not say we win or lose for this action [the controversial first goal]. Of course, it was involved – an important one.',
            'image' => 'noticia2.jpg',
            'categorie_id' => 1,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "GUARDIOLA: DON'T WASTE ENERGY ON THE PAST, FOCUS ON SPURS!", 
            'small_description' => 'Pep Guardiola has urged his players not to waste energy',
            'body' => 'Guardiola was frustrated with the 2-1 loss, of course - and the controversial offside decision that started the comeback for the hosts at Old Trafford.<br>
            But he wants his team to now look ahead to Thursday’s next big Premier League encounter, as we welcome Antonio Conte’s team.<br>
            He said: “I said to the players – don’t waste energy thinking what happened. Focus on Spurs.<br>
            “I would not say we win or lose for this action [the controversial first goal]. Of course, it was involved – an important one.',
            'image' => 'noticia2.jpg',
            'categorie_id' => 1,
            'created_at' => Carbon::now(),
        ],
        [
            'title' => "GUARDIOLA: DON'T WASTE ENERGY ON THE PAST, FOCUS ON SPURS!", 
            'small_description' => 'Pep Guardiola has urged his players not to waste energy',
            'body' => 'Guardiola was frustrated with the 2-1 loss, of course - and the controversial offside decision that started the comeback for the hosts at Old Trafford.<br>
            But he wants his team to now look ahead to Thursday’s next big Premier League encounter, as we welcome Antonio Conte’s team.<br>
            He said: “I said to the players – don’t waste energy thinking what happened. Focus on Spurs.<br>
            “I would not say we win or lose for this action [the controversial first goal]. Of course, it was involved – an important one.',
            'image' => 'noticia2.jpg',
            'categorie_id' => 1,
            'created_at' => Carbon::now(),
        ],

        ];

        DB::table('news')->insert($news);
        Schema::enableForeignKeyConstraints();
    }
}
