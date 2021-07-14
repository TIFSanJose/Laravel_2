<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

// many to many (inversa)   Roles < *--* Usuarios
    public function usuarios(){
        return $this->belongsToMany(User::class);
    }
}
