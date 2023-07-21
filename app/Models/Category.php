<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación uno a muchos con skills
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
