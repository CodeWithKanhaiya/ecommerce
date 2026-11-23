    @extends('vendor.includes.main')
    @push('title')
        <title>Orders</title>
    @endpush

    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <h4>Orders</h4>

                                </div>
                                <div class="mt-3">

                                    <table id="datatablesSimple" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($orders as $order)
                                                <tr>
                                                    <th>{{ $order->order_no }}</th>
                                                    <td>{{ $order->billing?->fullname ?? 'N/A' }}</td>
                                                    <td>₹ {{ $order->total }}</td>
                                                    <td>
                                                        @php 
                                                        $statusClass=match($order->status){
                                                            'pending'=>'text-bg-secoundary',
                                                            'processing'=>'text-bg-warning',
                                                             'ontheway' => 'On The Way',
                                                            'delivered'=>'text-bg-success',
                                                        }
                                                        @endphp
                                                        <span class="badge rounded-pill {{$statusClass}}">
                                                            {{ $order->status }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        @if( $order->status != 'delivered')
                                                        <a href="{{route('order.processing',$order->order_id)}}" class="btn btn-secondary btn-sm" title="Processing">
                                                            <i class="fa-solid fa-arrows-rotate"></i>
                                                        </a>
                                                        <a href="{{route('order.ontheway',$order->order_id)}}" class="btn btn-primary btn-sm" title="On the Way">
                                                            <i class="fa-solid fa-truck"></i>
                                                        </a>
                                                        @endif()

                                                        <a href="{{route('order.delivered',$order->order_id)}}" class="btn btn-success btn-sm" title="delivered">
                                                            <i class="fa-solid fa-check"></i>
                                                        </a>

                                                        <a href="{{url('vendor/order-detail/'.$order->order_id)}}" class="btn btn-warning btn-sm" title="">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Data not found</td>
                                                </tr>
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
