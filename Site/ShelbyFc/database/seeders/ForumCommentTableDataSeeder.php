<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ForumCommentTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('forum_posts_comments')->truncate();

        $forum_posts_comments = [
        [
            'id' => '1', 
            'user_id' => '1',
            'post_id' => '1',
            'comment' => 'Falta clara, mas pronto, ja todos sabemos que aquele arbitro gosta de roubar.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '2', 
            'user_id' => '1',
            'post_id' => '2',
            'comment' => 'Acho que nao tem nada de mal, ja comeca a ser perguicao a mais ao rapaz.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '3', 
            'user_id' => '1',
            'post_id' => '3',
            'comment' => 'Parece ser bom, mas so em campo e que o pode provar nao em videos.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '4', 
            'user_id' => '1',
            'post_id' => '4',
            'comment' => 'Estamos em 2, a 2 pontos do primeiro lugar.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        ];

        DB::table('forum_posts_comments')->insert($forum_posts_comments);
        Schema::enableForeignKeyConstraints();
    }
}