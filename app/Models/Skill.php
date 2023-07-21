<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // La propiedad $fillable indica qué atributos pueden ser asignados masivamente (mass assignable).
    protected $fillable = ['category_id', 'name'];

    // Relación muchos a uno con el modelo Category
    // Este método define la relación entre la habilidad (Skill) y la categoría (Category) a la que pertenece.
    // Una habilidad pertenece a una categoría.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
