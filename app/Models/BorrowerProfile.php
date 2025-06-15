<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowerProfile extends Model
{
    use HasFactory;

    protected $fillable=[
      'user_id','occupation', 'salary_range', 'address', 'phone_number', 'id_card', 'bank_statement', 'profile_pic', 'facebook', 'telegram',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
