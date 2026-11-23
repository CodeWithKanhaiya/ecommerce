    @extends('admin.includes.main')
    @push('title')
        <title> Orders</title>
    @endpush
    @php
        $orders = App\Models\Order::with('billing', 'items.product.category')->get();

    @endphp
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
                                                <th scope="col">Commision(%)</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <th scope="row">{{ $order->order_no }}</th>
                                                    <td>{{ $order->billing->fullname ?? '-' }}</td>
                                                    <td>₹ {{ $order->total }}.00</td>
                                                    <td>@php
                                                        $CommisionTotal = 0;
                                                        foreach ($order->order_items as $item) {
                                                            $product = $item->product;

                                                            $CommisionPercent = $product?->category?->c_commision ?? 0;

                                                            $CommisionTotal += ($item->total * $CommisionPercent) / 100;
                                                        }
                                                    @endphp
                                                      ₹ {{ number_format($CommisionTotal, 2) }}
                                                    </td>
                                                    <td>
                                                        @php
                                                            $statusClass = match ($order->status) {
                                                                'pending' => 'text-bg-secondary',
                                                                'processing' => 'text-bg-warning',
                                                                'ontheway' => 'text-bg-info',
                                                                'delivered' => 'text-bg-success',
                                                            };
                                                        @endphp
                                                        <span class="badge rounded-pill {{ $statusClass }}">
                                                            {{ $order->status }}
                                                        </span>

                                                    </td>
                                                    <td>

                                                        <a href="{{ url('admin/order-detail/' . $order->order_id) }}"
                                                            class="text-decoration-none btn btn-warning btn-sm">
                                                            <i class="fa-sharp-duotone fa-regular fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endsection
