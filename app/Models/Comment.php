<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $attributes = [
        'content'=>'A random name',
        'author_id'=>'1',
        'article_id'=>'1',
    ];

    protected $fillable = [
        'content',
        'author_id',
        'article_id',
    ];

    public function author()
    {
        return $this->hasOne(Author::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
