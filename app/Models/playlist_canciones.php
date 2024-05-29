<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class playlist_canciones extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function playlist_canciones(){
        return $this-> hasMany(playlist_canciones::class);
    }
}
