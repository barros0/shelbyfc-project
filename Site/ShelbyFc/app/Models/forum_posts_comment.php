<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class forum_posts_comment extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function replies()
    {
        return $this->hasMany(forum_posts_replies::class, 'comment_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
