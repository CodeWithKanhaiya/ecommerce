    @extends('vendor.includes.main')
    @push('title')
        <title> order-Detail</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-5">
                    <div class="row my-5">
                        <h6>Order Details: {{ $order->created_at }}</h6>
                        <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">

                            <h5 class="text-dark">Customer Information</h5>

                            {{-- <h6 class="text-dark">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                roots </h6> --}}
                            <span class="text-dark"><strong>Name:</strong>{{ $order->billing->fullname }} </span><br>
                            <span class="text-dark"><strong>Email:</strong>{{ $order->billing->email }}</span><br>
                            <span class="text-dark"><strong>Phone:</strong> {{ $order->user->phone }}</span><br>
                            <span class="text-dark"><strong>Shipping Address:</strong>{{ $order->billing->address }}
                            </span><br>


                        </div>
                        <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">

                            <h5 class="text-dark">Order Sumary</h5>
                            <span class="text-dark"><strong>Order id: </strong>{{ $order->order_no }} </span><br>

                            <span class="text-dark"><strong>Payment Method: </strong>{{ $order->payment_mode }}</span><br>
                            <span class="text-dark"><strong>Payment Status: </strong>
                                @php
                                    $statusClass = match ($order->status) {
                                        'pending' => 'text-bg-secondary',
                                        'processing' => 'text-bg-primary',
                                        'on the way' => 'text-bg-info',
                                        'delivered' => 'text-bg-success',
                                    };
                                @endphp
                                <span class="badge {{ $statusClass }}">{{ $order->status }}</span></span><br>


                            <span class="text-dark"><strong>Total: </strong>₹ {{ $order->total }} </span><br>
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-lg-12">

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h5>Product</h5>
                                        </th>
                                        <th scope="col">
                                            <h5>Price</h5>
                                        </th>
                                        <th scope="col">
                                            <h5>Quantity</h5>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody>


                                    @forelse ($orderItems as $item)
                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        @if ($item->product)
                                                            <img src="{{ asset('storage/' . $item->product->P_image) }}"
                                                                style="width:70px;height:70px;object-fit:cover;"
                                                                class="rounded-circle">
                                                        @else
                                                            <img src="{{ asset('images/no-image.png') }}"
                                                                style="width:70px;height:70px;object-fit:cover;"
                                                                class="rounded-circle">
                                                        @endif
                                                    </div>

                                                    <div class="p-3">
                                                        <h5>
                                                            {{ $item->product->P_name ?? 'Product Not Found' }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </th>

                                            <td>₹{{ $item->price }}</td>
                                            <td>{{ $item->qty }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                No products found!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>
            </main>
        @endsection
