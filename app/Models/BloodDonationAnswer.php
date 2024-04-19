<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonationAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'blood_donation_question_id', 'answer'];

    public function question()
    {
        return $this->belongsTo(BloodDonationQuestion::class, 'blood_donation_question_id');
    }
}


