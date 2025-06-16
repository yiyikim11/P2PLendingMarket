<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class LoanPackage extends Model
{
    use HasFactory;
    protected $table = 'loan_package';
    protected $primaryKey = 'loanpackage_id';
    protected $fillable=[
        'loan_name',
        'amount',
        'interest_rate',
        'duration',
        'payment_frequency',
        'lender_id'
    ];
    public $timestamps = false;
    //loanpackage muy ng bos lender id ng 
    public function loanPackages(){
        return $this->belongsTo(LenderProfile::class,'lender_id');
    }
}
