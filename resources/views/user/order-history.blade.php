    @extends('user.layouts.main')
    @push('title')
        <title> order-History</title>
    @endpush
     @php
    $user = auth()->user();

    $billing = null;
    $orders = collect();

    if ($user && $user->is_login) {

        $billing = App\Models\Billing::where('user_id', $user->user_id)->first();

        $orders = App\Models\Order::where('user_id', $user->user_id)->get();
    }
@endphp
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-5">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <h4>Order-History</h4>

                                </div>
                                <div class="">
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
                                            @forelse($orders as $order)
                                            <tr>
                                            <th scope="row">{{ $order->order_no ?? 'N/A' }}</th>
                                            <td>{{$order->created_at->format('d-m-y')}}</td>
                                            <td>{{$order->total}}</td>
                                            <td>
                                                @php 
                                                $statusClass=match($order->status){
                                                    'pending'=>'text-bg-secondary',
                                                     'processing'=>'text-bg-warning',
                                                     'on the way'=>'text-bg-info',
                                                     'delivered'=>'text-bg-success'
                                                }
                                                @endphp
                                                <span class="badge rounded-pill {{$statusClass}}">{{$order->status}}</span>
                                                <a href="{{url('user/detail/'.$order->order_id)}}" class="text-decoration-none mx-2"> View Details</a>
                                            </td>
                                            </tr>
                                            @empty

                                            <p class="text-center text-muted">No orders found.</p>

                                         @endforelse
                                        
                                           

                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endsection
