    @extends('vendor.includes.main')
    @push('title')
        <title> Dashboard-Vendor</title>
    @endpush
    @section('content')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                        <form action="{{ url('vendor/add-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @session('msg')
                                <div class="alert alert-success">
                                    {{session('msg') }}
                                </div>
                                @endsession
                                <div class="col-xl-8 col-md-8">
                                    <h4>Add Product</h4>

                                    <div class="row mt-3">

                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                            <input type="text"name="P_name" class="form-control" id="exampleInputEmail1"
                                                placeholder="Watch">
                                                @error('P_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Price</label>
                                            <input type="text" name= "P_price" class="form-control"
                                                id="exampleInputEmail1" placeholder="₹ 2944.00">
                                            @error('P_price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Category</label>
                                            <select class="form-select" name="c_id" aria-label="Default select example">
                                                @if ($category->count() > 0)
                                                    @foreach ($category as $cat)
                                                        <option value="{{ $cat->c_id }}"> {{ $cat->c_name }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                            @error('c_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Stock Quntity</label>
                                            <input type="text" name="P_stock" class="form-control"
                                                id="exampleInputEmail1" placeholder="25 pes">
                                            @error('P_stock')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Product description</label>

                                            <textarea class="form-control" name="P_description" cols="4" placeholder="Fill Product Description"
                                                id="floatingTextarea"></textarea>
                                            @error('P_description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-lg-3">
                                            <button type="submit" class="btn btn-primary btn-sm">Add Product</button>
                                        </div>
                                    </form>
                                </div>
                </div>
                <div class="col-xl-4 col-md-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('dashboard/assets/img/products/2.jpg') }}" style="width:150px;" alt=""
                            class="rounded-circle">
                        <div class="mt-3">
                            <label for="image" class="form-label  btn btn-primary">Choose
                                ProductImage</label>
                            <input type="file" name="P_image" class="form-control d-none" id="image">
                            @error('P_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

        </div>



        </div>

        </div>
        </main>
    @endsection
