<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'expiration_date'];

    // Relación muchos a uno con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno con el modelo Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
