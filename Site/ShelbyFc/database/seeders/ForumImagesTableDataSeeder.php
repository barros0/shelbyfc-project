<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ForumImagesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('forum_posts_images')->truncate();

        $forum_posts_images = [
        [
            'id' => '1', 
            'post_id' => '1',
            'image' => 'forum1.png',
        ],
        [
            'id' => '2', 
            'post_id' => '2',
            'image' => 'forum2.jpg',
        ],
        [
            'id' => '3', 
            'post_id' => '3',
            'image' => 'forum4.jpg',
        ],
        [
            'id' => '4', 
            'post_id' => '4',
            'image' => 'forum3.jpg',
        ],
        ];

        DB::table('forum_posts_images')->insert($forum_posts_images);
        Schema::enableForeignKeyConstraints();
    }
}