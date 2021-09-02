<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $attributes = [
        'first_name'=>'A random name',
        'last_name'=>'',
        'email'=>'',
    ];

    protected $fillable = [
        'first_name'=>'A random name',
        'last_name'=>'',
        'email'=>'',
        'phone'=>'',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
