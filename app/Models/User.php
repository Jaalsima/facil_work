<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // Definición de propiedad '$guarded' para gestionar la asignación masiva
    
    protected $guarded = [];
    
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'location',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


    // Relación uno a muchos con certifications
    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    // Relación uno a muchos con job_requests
    public function jobRequests()
    {
        return $this->hasMany(JobRequest::class);
    }

    // Relación uno a muchos con quotations
    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    // Relación uno a muchos con payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // Relación uno a muchos con job_reviews
    public function jobReviews()
    {
        return $this->hasMany(JobReview::class);
    }

    // Relación uno a muchos con messages (como remitente)
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    // Relación uno a muchos con messages (como destinatario)
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }
}
