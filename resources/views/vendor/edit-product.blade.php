    @extends('vendor.includes.main')
    @push('title')
        <title> Dashboard-Vendor</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                        <form action="{{ url('vendor\edit-product', $product->P_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-8 col-md-8">
                                    <h4>Edit Product</h4>

                                    <div class="row mt-3">

                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                            <input type="text"name="P_name" class="form-control" id="exampleInputEmail1"
                                                value="{{ $product->P_name }}">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Price</label>
                                            <input type="text" name="P_price" class="form-control"
                                                id="exampleInputEmail1" value="{{ $product->P_price }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Category</label>
                                            <select class="form-select" name="c_id" aria-label="Default select example">

                                                @foreach ($category as $cat)
                                                    <option @if ($cat->c_id == $product->c_id) selected @endif
                                                        value="{{ $cat->c_id }}">
                                                        {{ $cat->c_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Stock Quntity</label>
                                            <input type="text" name="P_stock" class="form-control"
                                                id="exampleInputEmail1" value="{{ $product->P_stock }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Product description</label>

                                            <textarea class="form-control"cols="4" placeholder="" id="floatingTextarea" name="P_description">{{ $product->P_description }}</textarea>

                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-primary btn-sm" type="submit">Edit Product</button>
                                        </div>
                                        

                                    </div>


                                </div>
                                <div class="col-xl-4 col-md-4 mt-5">
                                    <div class="text-center">
                                        <img src="{{ asset('storage/' . $product->P_image) }}" style="width:150px;"
                                            alt="" class="rounded-circle">
                                        <div class="mt-3">
                                            <label for="image" class="form-label  btn btn-primary">Choose
                                                ProductImage</label>
                                            <input type="file" name="P_image" class="form-control d-none" id="image">
                                        </div>
                                    </div>
                                </div>
                        </form>



                    
                </div>
                </div>

            </main>
        @endsection
