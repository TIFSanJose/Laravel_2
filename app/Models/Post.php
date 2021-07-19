<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

// one to one Polimorfica User 1--1 Image 1--1 > Post
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

// one to Many Polimorfica Posts < 1--* Comentarios *--1 Videos
    public function comentarios()
    {
        return $this->morphMany(Comentario::class, 'comentarioable');
    }

}
