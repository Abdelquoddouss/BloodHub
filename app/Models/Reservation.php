<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'center_id',
        'reservation_date',
        'appointment_date',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function center()
    {
        return $this->belongsTo(Center::class);
    }


    const STATUS_PENDING = 'En attente';
    const STATUS_APPROVED = 'Approuvé';
    const STATUS_CONFIRMED = 'Confirmé';
}
