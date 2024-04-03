<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'email',
        'phone',
        'description',
        'overture',
        'fermeture',
    ];
}
