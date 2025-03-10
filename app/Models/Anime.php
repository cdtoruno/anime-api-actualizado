<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'titulo', 'genero', 'estudio', 'estado', 
        'clasificacion', 'numero_episodios', 'personaje_principal'
    ];
}
