<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LenderProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'occupation',
        'salary_range',
        'address',
        'phone_number',
        'id_card',
        'profile_pic',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loanPackages(){
        return $this->hasMany(LoanPackage::class, 'lender_id');
    }

}