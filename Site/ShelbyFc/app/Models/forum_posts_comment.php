<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class forum_posts_comment extends Model
{
    use SoftDeletes;
    use HasFactory;
}
