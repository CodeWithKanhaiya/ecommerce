    @extends('user.layouts.main')
    @push('title')
        <title> View-product</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                        @session('msg')
                            <div class="alert alert-success"> {{ session('msg') }}</div>
                        @endsession
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <h4>View Product</h4>

                                </div>
                                <div class="">
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
                                                    <h5>Category</h5>
                                                </th>
                                                <th scope="col">
                                                    <h5>Stock</h5>
                                                </th>
                                                <th scope="col">
                                                    <h5>description</h5>
                                                </th>
                                                <th scope="col">
                                                    <h5>Action</h5>
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($products->count() > 0)
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('storage/' . $product->P_image) }}"
                                                                    width="70" height="70" style="object-fit: cover;"
                                                                    class="rounded-circle" alt="Product Image">

                                                                <div class="p-3">
                                                                    <h5>{{ $product->P_name }}</h5>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>₹ {{ $product->P_price }}</td>

                                                        <td>{{ $product->category?->c_name ?? '-' }}</td>

                                                        <td>{{ $product->P_stock }}</td>

                                                        <td>{{ $product->P_description }}</td>

                                                        <td>
                                                            <a href="{{ url('vendor/edit-product/' . $product->P_id) }}"
                                                                class="btn btn-primary btn-sm">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>

                                                            <form method="POST"
                                                                action="{{ route('deleteproduct', $product->P_id) }}"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        No Products Found
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </main>
        @endsection
