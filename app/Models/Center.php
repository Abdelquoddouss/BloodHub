<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Center extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = [
        'nom',
        'adresse',
        'email',
        'phone',
        'description',
        'overture',
        'fermeture',
        'category_id',

    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
    
    

    
}
