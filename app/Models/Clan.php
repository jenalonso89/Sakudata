<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{       
    protected $table = 'clanes';
    use HasFactory;
    public function personajes()
    {
        return $this->hasMany(Personaje::class);
    }
}
