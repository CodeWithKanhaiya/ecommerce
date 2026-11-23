    @extends('admin.includes.main')
    @push('title')
    <title>  dashboard admin </title>
    @endpush
    @php
    $orderCount=App\Models\Order::count();
    $userCount=App\Models\User::count();
    $vendorCount=App\Models\Vendor::count();
        $orders = App\Models\Order::latest()->take(5)->get();
        $allOrders =App\Models\Order::with(['items.product.category'])->get();
        $totalCommision =0;
        foreach( $allOrders as $order){
        foreach( $order->items as $item){
            $product= $item->product;
            $CommisionPercent=$product?->category?->c_commision??0;
            $totalCommision +=($item->total *$CommisionPercent)/100;
            }}

    @endphp
    @section('content')
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body  mx-auto mt-4">
                                        <h5 class="text-center text-dark">  Total Orders </h5>
                                    </div>
                                    <div class="mb-4">
                                       <h2  class="text-center text-dark"> {{$orderCount}}</h2>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body  mx-auto mt-4">
                                        <h5 class="text-center text-dark">  Total Commision </h5>
                                    </div>
                                    <div class="mb-4">
                                       <h2  class="text-center text-dark">₹ {{ number_format ($totalCommision, 2)}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body  mx-auto mt-4">
                                        <h5 class="text-center text-dark"> Total Users </h5>
                                    </div>
                                    <div class="mb-4">
                                       <h2  class="text-center text-dark"> {{$userCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body  mx-auto mt-4">
                                        <h5 class="text-center text-info"> Total Vendors </h5>
                                    </div>
                                    <div class="mb-4">
                                    <h2  class="text-center text-dark"> {{$vendorCount}}</h2>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex"> 
                                    <h4>Recent Order</h4>
                                    <div class="ms-auto">
                                    <a href="{{url('admin/order-detail')}}" class="text-decoration-none  ms-auto btn btn-dark btn-sm">View All</a>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="mt-3">
                                    <table id="datatablesSimple">
                                                <thead>
                                            <tr>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                            <th scope="row">{{$order->order_no}}</th>
                                            <td>{{$order->created_at}}</td>
                                            <td>  ₹ {{$order->total}}.00</td>
                                            <td>
                                                 @php 
                                                        $statusClass =match($order->status){
                                                            'pending'=>'text-bg-secoundary',
                                                            'processing'=>'text-bg-warning',
                                                             'ontheway' => 'On The Way',
                                                            'delivered'=>'text-bg-success',
                                                        }
                                                        @endphp
                                                        <span class="badge rounded-pill {{ $statusClass }}">
                                                            {{ $order->status }}
                                                        </span>
                                                
                                                <a href="{{url('admin/order-detail/'.$order->order_id)}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-eye"></i></a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        
                                            
                                        
                                        
                                        </tbody>
                                    </table>
                            </div>
                        </div>

                    </div>
                
            
            

                    
                
       </main>
@endsection