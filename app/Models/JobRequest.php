<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    // protected $fillable = ['user_id', 'category_id', 'skill_id', 'title', 'description', 'location', 'status'];

    protected $guarded = [];

    // Relación muchos a uno con user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno con category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación muchos a uno con skill
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    // Relación uno a muchos con quotations
    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    // Relación uno a muchos con visits
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
