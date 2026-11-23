<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $table = 'billing';

    protected $primaryKey = 'bill_id';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'country',
        'fullname',
        'email',
        'pincode',
        'landmark',
        'city',
        'state',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
