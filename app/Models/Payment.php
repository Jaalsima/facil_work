<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // protected $fillable = ['user_id', 'quotation_id', 'amount', 'status', 'payment_method', 'transaction_id'];

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

    // Relación muchos a uno con quotation
    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
