<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $table = 'orders';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'order_no',
        'status',
        'payment_mode',
        'total',
    ];
    public function items(){
        return $this->hasMany(OrderItem::class,'order_id');
    }

    // Order has many items
    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'order_id');
    }

    // Order belongs to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // Order has one billing
    public function billing()
    {
        return $this->hasOne(Billing::class, 'user_id', 'user_id');
    }
}
