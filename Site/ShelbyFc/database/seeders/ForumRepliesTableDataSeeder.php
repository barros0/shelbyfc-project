<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ForumRepliesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('forum_posts_replies')->truncate();

        $forum_posts_replies = [
        [
            'id' => '1', 
            'comment_id' => '1',
            'user_id' => '2',
            'comment' => 'Por acaso nao acho, nota-se perfeitamente que ele apenas toca na bola',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '2', 
            'comment_id' => '2',
            'user_id' => '3',
            'comment' => 'Não e perseguição, ha atitudes que nao se tem e esse a uma delas.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '3', 
            'comment_id' => '3',
            'user_id' => '4',
            'comment' => 'Este vai ser o próximo ronaldo!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'id' => '4', 
            'comment_id' => '4',
            'user_id' => '5',
            'comment' => 'Em breve voltamos para o nosso meerecido lugar.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        ];

        DB::table('forum_posts_replies')->insert($forum_posts_replies);
        Schema::enableForeignKeyConstraints();
    }
}
