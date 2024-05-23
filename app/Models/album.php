<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    public function artist()
    {
        return $this->belongsTo(artists::class);
    }
    public function canciones(){
        return $this-> hasMany(canciones::class);
    }
}
