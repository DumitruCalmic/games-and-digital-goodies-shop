<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $attributes = [
        'name'=>'A random name',
        'description'=>'',
        'image'=>'',
    ];

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
