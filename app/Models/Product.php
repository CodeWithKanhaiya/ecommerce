<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'P_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'v_id',
        'P_name',
        'P_price',
        'c_id',
        'P_stock',
        'P_description',
        'P_image',
    ];

   public function category()
{
    return $this->belongsTo(Category::class, 'c_id', 'c_id');
}
public function vendor(){
    return $this->belongsTo(vendor::class);

}
}