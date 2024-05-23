<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canciones extends Model
{
    public function album()
    {
        return $this->belongsTo(album::class);
    }
}
