<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forum_post;

class Forum_posts_images extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function post()
    {
        return $this->hasOne(Forum_post::class, 'post_id', 'id');
    }
}