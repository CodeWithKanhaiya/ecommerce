    @extends('admin.includes.main')
    @push('title')
        <title> order-Detail</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-5">
                    <div class="row my-5">
                        <h6>Order Details: {{$order->created_at}}</h6>
                        <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">

                            <h5 class="text-dark">Customer Information</h5>
                            <span class="text-dark"><strong>Name :</strong>{{$order->billing->fullname ?? '-'}} </span><br>
                            <span class="text-dark"><strong>Email: </strong>{{$order->billing->email ??'-'}} </span><br>
                            <span class="text-dark"><strong>Phone: </strong>{{$order->user->phone ?? '-'}}</span><br>
                            <span class="text-dark"><strong>Shipping Address: </strong>{{$order->billing->address ?? '-'}} </span><br>


                        </div>
                        <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">

                            <h5 class="text-dark">Order Sumary</h5>
                            <span class="text-dark"><strong>Order id: </strong>{{$order->order_no}} </span><br>

                                 <span class="text-dark"><strong>Payment Method: </strong>{{$order->payment_mode}}</span><br>
                                  <span class="text-dark"><strong>Payment Status: </strong>
                                        @php
                                        $statusClass=match($order->status){
                                            'pending'=>'text-bg-secondary',
                                            'processing'=>'text-bg-warning',
                                            'on the way'=>'text-bg-info',
                                            'delivered'=>'text-bg-success',
                                        }
                                        @endphp
                            <span class="badge bg-success {{ $statusClass}}">{{$order->status}}</span></span><br>
                            <span class="text-dark"><strong>Total:</strong>₹{{$order->total}}.00 </span><br>
                           
        
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12 col-md-12">

                            <div class="position-relative mt-4">

                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>

                                <!-- Step 1 -->
                                <button type="button"
                                    class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                                    style="width: 2rem; height: 2rem;">
                                    1
                                </button>

                                <!-- Step 2 -->
                                <button type="button"
                                    class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill"
                                    style="left: 33.33%; width: 2rem; height: 2rem;">
                                    2
                                </button>

                                <!-- Step 3 -->
                                <button type="button"
                                    class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill"
                                    style="left: 66.66%; width: 2rem; height: 2rem;">
                                    3
                                </button>

                                <!-- Step 4 -->
                                <button type="button"
                                    class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                                    style="width: 2rem; height: 2rem;">
                                    4
                                </button>

                            </div>

                        </div>
                        <div class="col-xl-12">
                            <div class="d-flex">
                                <div class="p-2 flex-fill  p-2 ms-5"> Order Recieved</div>
                                <div class="p-2 flex-fill p-2 ms-5">Processing</div>
                                <div class="p-2 flex-fill p-2 ms-5">On the Way</div>
                                <div class="p-2 flex-fill p-2 ms-5">Delivery</div>
                            </div>
                        </div>

                    </div>
                    

                    <div class="row my-5">
                        <div class="col-lg-12">
                           
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col"><h5>Product</h5></th>
                                            <th scope="col"><h5>Price</h5></th>
                                            <th scope="col"><h5>Quantity</h5></th>
                                            <th scope="col"><h5>TotaTotal</h5></th>
                                               
                                        
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($order->items as $item)
                                        <tr>
                                            <th>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{ asset($item->image) }}"
                                                            style="width:70px;" class="rounded-circle">
                                                    </div>
                                                    <div class="p-3">
                                                        <h5>{{$item->name}}</h5>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>₹ {{$item->price}}.00</td>
                                            <td>{{$item->qty}}</td>
                                            <td>₹{{$item->total}}</td>
                                            
                                        </tr>

                                     @endforeach
                                      
                                      
                                    </tbody>
                                </table>


                        </div>

                    </div>

                </div>
            </main>
        @endsection
