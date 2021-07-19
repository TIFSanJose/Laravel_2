<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

// many to many User *--* > Video    
    public function usuarios(){
        return $this->belongsToMany(User::class);
    }

// one to Many Polimorfica Posts < 1--* Comentarios *--1 Videos
    public function comentarios()
    {
        return $this->morphMany(Comentario::class, 'comentarioable');
    }

// many to many Polimorfica Video <1--* Taggables *--1 Tag
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
