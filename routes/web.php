<?php
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\CategoryController;
 use App\Http\Controllers\SubcategoryController;
 use App\Http\Controllers\ProductdetailController;
 use App\Http\Controllers\CartController;
 use App\Http\Controllers\CheckoutController;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\VendorController;
 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\admin\AdminCategoryController;
 use App\Http\Controllers\vendor\ProductController;
 use App\Http\Middleware\VendorMiddleware;
 use App\Http\Controllers\admin\AdminBannerController;
  use App\Http\Controllers\vendor\VendorOrderController;

 
 Route::get('/', function () {
    return view('welcome');
    
 });
Route::post('/check-phone', [UserController::class, 'checkPhone'])->name('verify.phone');
Route::post('/authentication-verify-Otp', [UserController::class, 'authenticationVerifyOtp'])->name('authentication.verify.otp');
 Route::post('/submit-phone-billing',[UserController::class,'submitPhoneAndBilling'])->name('submit.phone.billing');
 Route::post('/verify-Otp',[UserController::class,'verifyOtp'])->name('verify.otp');
 Route::post('/place-order',[CheckoutController::class,'placeOrder'])->name('place.order');
 Route::post('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
Route::get('/',[HomeController::class,'index']);
Route::get('category/{category}',[CategoryController::class,'detail'])->name('category');
Route::get('sub-category/{category}/{sub_category}',[SubcategoryController::class,'detail'])->name('category.sub_category');
Route::get('sub-category/{category}/{sub_category}/{product_detail}',[ProductdetailController::class,'detail'])->name('product_detail');
Route::get('/cart-list/{slug}',[CartController::class,'list']);
Route::get('/checkout/{slug}',[CheckoutController::class,'checkout']);
Route::get('/register',[UserController::class,'register']);
Route::get('/register1',[UserController::class,'register1']);
Route::get('/login',[UserController::class,'login']);
Route::get('/login1',[UserController::class,'login1']);


// User Profile Route - Always Last
Route::get('user/{slug}', [UserController::class, 'index']);

// User Routes
Route::get('user/order-history/{slug}', [UserController::class, 'history']);

Route::get('user/detail/{order_id}', [UserController::class, 'detail']);

Route::get('user/settings/{slug}', [UserController::class, 'settings']);
Route::post('user/settings/{update}', [UserController::class, 'updateSettings'])->name('user.settings.update');

//Vendor Dashboard Route Start Here
Route::get('vendor/signup',[VendorController::class,'signup']);
Route::post('vendor/signup',[VendorController::class,'register']);
// Vendor Orders
Route::prefix('vendor')->middleware([VendorMiddleware::class])->group(function () {
    Route::get('/orders', [VendorOrderController::class, 'orders'])
        ->name('vendor.orders');
});
Route::get('vendor/login',[VendorController::class,'login']);
Route::post('vendor/login',[VendorController::class,'login_create']);

Route::get('vendor/logout',[VendorController::class,'logout']);

Route::get('vendor/forget',[VendorController::class,'forget']);

Route::get('vendor/',[VendorController::class,'index'])->middleware(VendorMiddleware::class);
Route::get('vendor/add-product/',[ProductController::class,'addproduct']);
Route::post('vendor/add-product/',[ProductController::class,'createproduct']);
Route::get('vendor/view-product/',[ProductController::class,'viewproduct']);
Route::get('vendor/edit-product/{P_id}',[ProductController::class,'editproduct']);
Route::put('vendor/edit-product/{P_id}',[ProductController::class,'updateproduct']);
Route::delete('vendor/delete-product/{P_id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');

// Route::get('vendor/orders/',[VendorController::class,'orders']);
Route::get('vendor/order-detail/{id}',[VendorController::class,'orderdetail']);
Route::get('vendor/users/',[VendorController::class,'users']);
Route::get('vendor/profile', [VendorController::class, 'profile']);
Route::put('vendor/profile', [VendorController::class, 'updateprofile']);

//Admin dashboard route start here
Route::get('admin/login',[AdminController::class,'login']);
Route::get('admin/',[AdminController::class,'index']);
//Route::get('admin/order-detail/{slug}',[AdminController::class,'orderdetail']);
Route::get('admin/order-detail/{id}', [AdminController::class, 'orderdetail'])->name('admin.order.detail');
Route::get('admin/add-category/',[AdminCategoryController::class,'addcategory']);
Route::post('admin/add-category/',[AdminCategoryController::class,'createcategory']);
Route::get('admin/view-category/',[AdminCategoryController::class,'viewcategory']);
Route::get('admin/edit-category/{c_id}',[AdminCategoryController::class,'editcategory']);
Route::put('admin/edit-category/{c_id}',[AdminCategoryController::class,'updatecategory']);
Route::delete('admin/delete-category/{c_id}',[AdminCategoryController::class,'deletecategory']);

Route::get('admin/users/',[AdminController::class,'users']);
Route::get('admin/vendors/',[AdminController::class,'vendors']);

Route::get('admin/vendors/{id}/verified', [VendorController::class, 'verified'])
    ->name('vendor.verify');

Route::get('admin/vendors/{id}/unverified', [VendorController::class, 'unverify'])
    ->name('vendor.unverify');

Route::get('vendor/order{id}/processing',[VendorController::class,'processing'])->name('order.processing');
Route::get('vendor/order{id}/ontheway',[VendorController::class,'ontheway'])->name('order.ontheway');
Route::get('vendor/order{id}/delivered',[VendorController::class,'delivered'])->name('order.delivered');

// Route::get('admin/vendors/{id}/verified',[VendorController::class,'verify'])->name('vendor.verify');
// Route::get('admin/vendors/{id}/unverified',[VendorController::class,'verify'])->name('vendor.unverify');

Route::get('admin/orders/',[AdminController::class,'orders']);
Route::get('admin/order-detail/',[AdminController::class,'orderdetail']);
Route::get('admin/add-banner/',[AdminBannerController::class,'addbanner']);
Route::post('admin/add-banner/',[AdminBannerController::class,'createbanner']);
Route::get('admin/view-banner/',[AdminBannerController::class,'viewbanner']);
Route::delete('admin/delete-banner/{b_id}',[AdminBannerController::class,'deletebanner']);

// Route::get('admin/products/',[AdminController::class,'products']);