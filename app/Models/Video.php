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

}
