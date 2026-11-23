<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Billing;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
   public function register(){
    return view('register');
   } 
    public function register1(){
    return view('register1');
   } 
    public function login(){
    return view('login');
   } 
   public function login1(){
    return view('login1');
   } 
   //user dashboard work
   public function index(){
    return view('user/index');
   } 
   public function history(){
    return view('user/order-history');
   } 
  public function detail($order_id)
{
    $user = Auth::user();

    $billing = Billing::where('user_id', $user->user_id)->first();

    $order = Order::with('order_items')
        ->where('user_id', $user->user_id)
        ->where('order_id', $order_id)
        ->firstOrFail();

    return view('user.detail', compact(
        'order',
        'billing',
        'user',
        'order_id'
    ));
}
  public function settings()
{
    $user = Auth::user();

    return view('user.settings', compact('user'));
}

public function submitPhoneAndBilling(Request $request)
{
    $request->validate([
        'phone'    => 'required|digits:10',
        'fullname' => 'required',
        'email'    => 'required|email',
        'pincode'  => 'required',
        'landmark' => 'nullable',
        'city'     => 'required',
        'state'    => 'required',
        'country'  => 'nullable',
        'address'  => 'required',
    ]);

    // Check phone already registered
    if (User::where('phone', $request->phone)->exists()) {
        return response()->json([
            'error' => 'phone_exists'
        ]);
    }

    // Generate test OTP
    Session::put('otp', '1234');
    Session::put('phone', (string) $request->phone);

    // Store billing data in session
    Session::put('billing_data', [
        'country'  => $request->country,
        'fullname' => $request->fullname,
        'email'    => $request->email,
        'pincode'  => $request->pincode,
        'landmark' => $request->landmark,
        'city'     => $request->city,
        'state'    => $request->state,
        'address'  => $request->address,
    ]);

    return response()->json([
        'otp_sent' => true
    ]);
    
}public function verifyOtp(Request $request)
{
    $request->validate([
        'phone' => 'required|digits:10',
        'otp'   => 'required',
    ]);

    // Get OTP and phone from session
    $sessionOtp = (string) Session::get('otp');
    $sessionPhone = (string) Session::get('phone');

    // Verify OTP and phone
    if (
        $sessionOtp === '' ||
        $sessionPhone === '' ||
        (string) $request->otp !== $sessionOtp ||
        (string) $request->phone !== $sessionPhone
    ) {
        return response()->json([
            'verified' => false,
            'message' => 'Invalid OTP'
        ]);
    }

    $billingData = Session::get('billing_data');

    if (!$billingData) {
        return response()->json([
            'verified' => false,
            'message' => 'Billing session expired'
        ], 400);
    }

    // Find or create user
    $user = User::where('phone', $sessionPhone)->first();

    if (!$user) {

        $user = User::create([
            'phone' => $sessionPhone,
            'email' => $billingData['email'],
            'is_login' => true,
        ]);

    } else {

        $user->is_login = true;
        $user->save();

    }

    // Save billing details
    $billing = new Billing($billingData);
    $billing->user_id = $user->user_id;
    $billing->save();

    // Login user
    Auth::login($user);

    Session::put('user_id', $user->user_id);

    // Clear OTP session
    Session::forget(['otp', 'billing_data', 'phone']);

    return response()->json([
        'verified' => true
    ]);
}
public function updateSettings(Request $request){
$user=Auth::user();
    $request->validate([
        'fullname'=>'required',
        'email'=>'required|email',
        'pincode'=>'nullable|string',
        'landmark'=>'nullable|string',
        'country'=>'nullable|string',
        'city'=>'nullable|string',
        'state'=>'nullable|string',
    ]);
    $billing=Billing::firstOrCreate(['user_id'=>$user->user_id]);
    $billing->update([
        'fullname'=>$request->fullname,
         'email'=>$request->email,
          'pincode'=>$request->pincode,
           'landmark'=>$request->landmark,
            'country'=>$request->country,
            'city'=>$request->city,
             'state'=>$request->state,
    ]);
    return redirect()->back()->with('success','settings updated successfully');


}

public function checkPhone(Request $request)
{
    $request->validate([
        'phone' => 'required|digits:10'
    ]);

    $exists = User::where('phone', $request->phone)->exists();

    return response()->json([
        'exists' => $exists,
        'error' => $exists ? null : 'Phone number not registered.'
    ]);
}


public function authenticationVerifyOtp(Request $request)
{
    $request->validate([
        'phone' => 'required|digits:10',
        'otp' => 'required|digits:4',
    ]);

    $user = User::where('phone', $request->phone)->first();

    if ($user && $request->otp === '1234') {

        $user->is_login = true;
        $user->save();

        Auth::login($user);

        return response()->json([
            'verified' => true,
            'dashboard_url' => url('user/' . $user->user_id),
        ]);
    }

    return response()->json([
        'verified' => false,
        'error' => 'Invalid OTP'
    ]);
}
}