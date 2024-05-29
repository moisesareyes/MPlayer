<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    public function playlist_canciones(){
        return $this-> hasMany(playlist_canciones::class);
    }
}
