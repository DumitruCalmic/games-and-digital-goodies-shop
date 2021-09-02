<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $attributes = [
        'name'=>'A random name',
    ];

    protected $fillable = [
        'name',
    ];

    public function author()
    {
        return $this->belongsToMany(Article::class);
    }
}
