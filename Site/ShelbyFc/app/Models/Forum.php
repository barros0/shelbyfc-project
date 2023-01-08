<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "forum_posts";

    protected $fillable = [
        'title',
        'body',
    ];

    public function forum()
    {
        return $this->hasMany(Users::class, 'id', 'user_id');
    }
}
