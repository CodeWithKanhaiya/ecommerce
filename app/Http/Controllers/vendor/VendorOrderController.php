<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\Order;

class VendorOrderController extends Controller
{
    // public function orders()
    // {
    //     // Logged-in vendor ID
    //     $vendorId = session('vendorId');

    //     // Check vendor login
    //     if (!$vendorId) {
    //         return redirect('vendor/login');
    //     }

    //     // Fetch vendor orders
    //     $orders = Order::whereHas('orderItems.product', function ($query) use ($vendorId) {
    //         $query->where('v_id', $vendorId);
    //     })
    //     ->with([
    //         'billing',
    //         'orderItems' => function ($query) use ($vendorId) {
    //             $query->whereHas('product', function ($q) use ($vendorId) {
    //                 $q->where('v_id', $vendorId);
    //             });
    //         }
    //     ])
    //     ->latest()
    //     ->get();

    //     return view('vendor.orders', compact('orders'));
    // }
    public function orders()
{
    $vendorId = session('vendorId');

    if (!$vendorId) {
        return redirect('vendor/login');
    }

    $orders = Order::with('billing')
        ->latest()
        ->get();

    return view('vendor.orders', compact('orders'));
}
}