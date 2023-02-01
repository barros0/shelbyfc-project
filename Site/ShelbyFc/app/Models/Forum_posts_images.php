<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forum_post;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum_posts_images extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;

    public function post()
    {
        return $this->hasOne(Forum_post::class, 'post_id', 'id');
    }
}