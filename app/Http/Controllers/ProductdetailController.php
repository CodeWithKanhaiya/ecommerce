<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class   ProductdetailController extends Controller
{
   public function detail($category,$sub_category,$product_detail){
      //dd($product_detail);
      $product_detail=Product::where('P_name',$product_detail)->first();
       
return view('product-detail',['product_detail'=>$product_detail]);
   } 
}