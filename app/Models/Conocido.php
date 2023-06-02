<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocido extends Model
{
    use HasFactory;

    public function contactos(){

        return $this->hasmany('App\Models\Contacto');
    }
}
