<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $guarded = [];

    use HasFactory;
// one to many inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
// one to many Polimorfica
    public function comentarioable(){
        return $this->morphTo();
    }
}
