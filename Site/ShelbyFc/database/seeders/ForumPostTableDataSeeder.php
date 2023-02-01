<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ForumPostTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('forum_posts')->truncate();

        $forum_posts = [
        [
            'id' => '1', 
            'user_id' => '3',
            'title' => 'Falta sobre o Diogo Jota',
            'body' => 'Malta o que acharam do lance sobre o Diogo? A mim pareceu falta ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '2', 
            'user_id' => '5',
            'title' => 'Festejo do Diogo Jota',
            'body' => 'Malta acharam o festejo do diogo decente? Achei ridiculo ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '3', 
            'user_id' => '2',
            'title' => 'Nova Contratacao Shelby B',
            'body' => 'Tive a ver videos da nova contracao, e acho que vai ser nova promessa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '4', 
            'user_id' => '4',
            'title' => 'Lugar na Tabela',
            'body' => 'Alguem me consegue dizer o lugar em que vamos no campeonato?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],


        ];

        DB::table('forum_posts')->insert($forum_posts);
        Schema::enableForeignKeyConstraints();
    }
}