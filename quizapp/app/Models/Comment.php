<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $fillable = ['username', 'comment'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
