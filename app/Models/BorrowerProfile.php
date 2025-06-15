<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowerProfile extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'occupation',
    'salary_range',
    'phone_number',
    'address',
    'telegram',
    'id_card',
    'bank_statement',
    'facebook',
    'profile_pic',
  ];

  /**
   * Get the user that owns the borrower profile.
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}