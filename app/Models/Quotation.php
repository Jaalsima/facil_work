<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    // protected $fillable = ['job_request_id', 'user_id', 'price', 'time_estimate', 'message', 'status'];

    protected $guarded = [];

    // Relación muchos a uno con job_request
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
