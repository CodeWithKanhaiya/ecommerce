<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
      protected $primaryKey = 'c_id';
    public $fillable=[ "p_c_id","c_name","c_commision"];

function parentCategory(){
  return $this->belongsTo(Category::class,'p_c_id');
}
function subCategory(){
  return $this->hasmany(Category::class,'p_c_id');
}
function  products(){
  return $this->hasMany(Product::class,'c_id');
}
}