@extends('layouts.main')
@push('title')
    <title>Product Detail</title>
@endpush
@section('content')
    <div class="container-flue bg-light p-5">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>{{ $product_detail->P_name }}</h1>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('storage/' . $product_detail->P_image) }}" class="rounded img-fluid" alt="">

                </div>

                <div class="col-lg-8">
                    <div>
                        <h2> {{ $product_detail->P_name }}</h2>
                        <h5>₹ {{ $product_detail->P_price }}.00</h5>
                        <div>
                            <div class="d-flex flex-row  mb-3">
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="p-1 mx-2">
                                    <h6> (2 Customer Review)</h6>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex flex-row  mb-3">
                                <div class="p-1">
                                    <h6>Quantity</h6>
                                </div>
                                <div class="p-1">
                                    <button class=" btn btn-secondary btn-sm rounded-start-pill dec-qty"><i
                                            class="fa-solid fa-minus"></i></button>
                                    <input class="mx-2 qty-val text-center border-0 bg-white" value="1" disabled
                                        style="width:25px;"></input>
                                    <button class="btn btn-secondary btn-sm rounded-end-pill inc-qty"> <i
                                            class=" fa-solid fa-plus"></i></button>
                                </div>

                            </div>
                            <p class="">{{ $product_detail->P_description }}.</p>

                        </div>
                        <div>

                            <button class="btn theme-green-btn text-light rounded-pill me-1 px-3 py-2 add-to-cart">Add to
                                cart</button>
                            <a href="" class=" btn theme-orange-btn text-light rounded-pill px-3 py-2">Buy Now</a>
                        </div>
                    </div>

                </div>

                <div class="my-4">
                    <h4>Product Description </h4>
                    <p class="">{{ $product_detail->P_description }}</p>

                </div>
                {{-- Related Product --}}
                <div>
                    <section>
                        <div class="container">
                            <div class="d-flex ">
                                <div class=" flex-grow-1 ">
                                    <h2 class="">Related Product</h2>
                                </div>
                                <div class=""><a
                                        href="#"class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View
                                        All</a></div>

                            </div>
                            <div class="row theme-product">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href=""><img src="{{ asset('assets/images/products/9.jpg') }}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"> <a href="#"
                                                    class="text-dark text-decoration-none">Bag</a></h6>
                                            <h5 class="card-title text-center"> ₹ 2944.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href=""> <img src="{{ asset('assets/images/products/10.jpg') }}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"> <a
                                                    href="#"class="text-dark text-decoration-none">Women bag</a></h6>
                                            <h5 class="card-title text-center"> ₹ 1099.00</h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href=""> <img src="{{ asset('assets/images/products/5.jpg') }}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"> <a
                                                    href="#"class="text-dark text-decoration-none">Camera</a></h6>
                                            <h5 class="card-title text-center"> ₹ 5999.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href=""><img src="{{ asset('assets/images/products/4.jpg') }}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"> <a href="#"
                                                    class="text-dark text-decoration-none">Char</a></h6>
                                            <h5 class="card-title text-center"> ₹ 13999.00</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
                <hr class="mt-5">
                {{-- Review --}}
                <section>
                    <h2> 02 Review</h2>
                    <div class="row mt-3">
                        <div class="col-lg-1">
                            <img src="{{ asset('assets/images/review/user.png') }}" class="rounded-circle img-fluid">
                        </div>
                        <div class="col-lg-11">
                            <div>
                                <h4>John Doe</h4>
                                <div>
                                    <div class="d-flex">
                                        <div class="flex-grow-1 ">
                                            <h6 class="">26/09/2026</h6>
                                        </div>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>

                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Reference site about Lorem Ipsum, giving information on its origins ...</p>
                                <div><a href=""
                                        class=" btn theme-orange-btn btn-sm text-light rounded-pill ">Reply</a></div>
                            </div>

                        </div>
                        <div class="col-lg-1 mt-4">
                            <img src="{{ asset('assets/images/review/user.png') }}" class="rounded-circle img-fluid">
                        </div>
                        <div class="col-lg-11 mt-4">
                            <div>
                                <h4>Alen Musk</h4>
                                <div>
                                    <div class="d-flex">
                                        <div class="flex-grow-1 ">
                                            <h6 class="">26/09/2026</h6>
                                        </div>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>

                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Reference site about Lorem Ipsum, giving information on its origins ...</p>
                                <div><a href=""
                                        class=" btn theme-orange-btn btn-sm text-light rounded-pill ">Reply</a></div>
                            </div>

                        </div>


                    </div>
                </section>
                {{--  Add to review --}}
                <section>
                    <div class="container  my-5 bg-light p-5">
                        <h2>Add a Review</2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="">
                                        <div class="form-text fs-4"> Rate this product.*
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="row my-3">
                                            <div class="col-lg-6 pb-3">
                                                <input type="text" class="form-control form-control-lg" name="name"
                                                    placeholder="enter the name" id="">
                                            </div>
                                            <div class="col-lg-6 pb-3">
                                                <input type="email" class="form-control form-control-lg" name="email"
                                                    placeholder="enter the email" id="">
                                            </div>
                                            <div class="col-lg-12 pb-3">
                                                <textarea class="form-control form-control-lg" placeholder="Your are message" rows="3"></textarea>
                                            </div>
                                            <div><a class="btn theme-orange-btn  text-light rounded-pill">Paost a Comment
                                                    <i class="fa-solid fa-circle-arrow-right"></i></a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
        <script>
            function increase_qty() {
                var _qty = $(".qty-val").val();

                _qty = parseInt(_qty) + 1;

                $(".qty-val").val(_qty);
            }

            function decrease_qty() {
                var _qty = parseInt($(".qty-val").val());

                if (_qty > 1) {
                    _qty = _qty - 1;
                    $(".qty-val").val(_qty);
                } else {
                    alert('Qty should be at least 1');
                }
            }

            function add_to_cart() {
                var qty = parseInt($(".qty-val").val(), '');
                var name = "{{ $product_detail->P_name }}";
                var price = parseFloat("{{ $product_detail->P_price }}");
                var total = qty * price;
                var image = "{{ asset('storage/' . $product_detail->P_image) }}";
                var cartData = {
                    'product_name': name,
                    'quantity': qty,
                    'product_price': price,
                    'total_price': total,
                    'image_url': image
                };
                var cart = JSON.parse(localStorage.getItem("cart")) || [];

                let existingIndex = cart.findIndex(item => item.product_name === name);

                if (existingIndex > -1) {
                    cart[existingIndex].quantity += qty;
                    cart[existingIndex].total_price =
                        cart[existingIndex].quantity * price;
                } else {
                    cart.push(cartData);
                }

                localStorage.setItem("cart", JSON.stringify(cart));
                update_cart_count();
                alert("item added to cart!");

            }

            $(document).ready(function() {

                $(document).on('click', '.inc-qty', increase_qty);

                $(document).on('click', '.dec-qty', decrease_qty);
                $(document).on('click', '.add-to-cart', add_to_cart);
                update_cart_count();
            });
        </script>

    </section>
@endsection
