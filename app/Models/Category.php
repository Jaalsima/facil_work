<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    // En este caso, está vacía, lo que significa que todos los atributos pueden ser asignados masivamente.
    protected $guarded = [];

    // Relación uno a muchos con skills
    // Este método define la relación entre la categoría y las habilidades (skills).
    // Una categoría puede tener muchas habilidades.
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
