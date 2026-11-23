<?php
namespace App\Http\Controllers\vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    public function  addproduct(){
        
        $category=Category::all();
        return view('vendor/add-product', compact('category'));
   } 
   public function  createproduct(Request $request){
    $request->validate([
        "P_name"=>"required",
        "P_price"=>"required",
        "c_id"=>"required",
        "P_stock"=>"required",
        "P_description"=>"required",
        "P_image"=>"required",
        
    ]);
     
    Product::create([
        
        "v_id"=>session('vendorId'),
       
        "P_name"=>$request->P_name,
        "P_price"=>$request->P_price,
        "c_id"=>$request->c_id,
        "P_stock"=>$request->P_stock,
        "P_description"=>$request->P_description,
        "P_image"=>$request->file('P_image')->store('products', 'public'),
    ]);
    return redirect('vendor/add-product')->with('msg', 'product added successfully');
   } 
    public function  viewproduct(){
        $products=Product::all();
        return view('vendor/view-product', compact('products'));
   } 
 public function editproduct($P_id){
        $product=Product::find($P_id);
          $category=Category::all();
        return view('vendor/edit-product', compact('product', 'category'));
   } 
   public function updateproduct(Request $request,$P_id){

        $product=Product::find($P_id);
        $image=$product->P_image;
        if($request->hasFile('P_image')){
            $image=$request->file('P_image')->store('products', 'public');

        }
          $product->update([
        
        "P_name"=>$request->P_name,
        "P_price"=>$request->P_price,
        "c_id"=>$request->c_id,
        "P_stock"=>$request->P_stock,
        "P_description"=>$request->P_description,
        "P_image"=>$image
          ]);
         return redirect('vendor/view-product')->with('msg', 'update product successfully');
   } 
  public function deleteproduct($P_id)
{
    $product = Product::find($P_id);

    if (!$product) {
        return redirect('vendor/view-product')
            ->with('error', 'Product not found');
    }

    $product->delete();

    return redirect('vendor/view-product')
        ->with('msg', 'Product deleted successfully');
}
  
}
