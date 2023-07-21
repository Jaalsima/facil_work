<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // protected $fillable = ['job_request_id', 'sender_id', 'recipient_id', 'message'];

    protected $guarded = [];

    // Relación muchos a uno con job_request
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con sender (usuario remitente)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relación muchos a uno con recipient (usuario destinatario)
    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
