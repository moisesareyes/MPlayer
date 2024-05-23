<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class artists extends Model
{
    use HasFactory;
    protected $table= 'artists';
    protected function name():Attribute{
        return Attribute::make(set: function($value){
            return strtoupper($value);
        });
        }
    public function imagenes(){
        return $this-> HasMany(imagenes::class);
    }
    public function redirects(){
        return $this-> hasMany(redirects::class);
    }
    public function album(){
        return $this-> hasMany(album::class);
    }
    }
