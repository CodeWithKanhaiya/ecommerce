@extends('layouts.main')
@push('title')
    <title>Product Detail</title>
@endpush
@section('content')
    <div class="container-flue bg-light p-5">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Product Detail</h1>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/products/1.jpg') }}" class="rounded img-fluid" alt="">

                </div>
                <div class="col-lg-8">
                    <div>
                        <h2>Woman Shoes</h2>
                        <h5>₹ 5999.00</h5>
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
                                <div class="p-1"><h6>Quantity</h6></div>
                                <div class="p-1">
                                    <span class=" btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span> 01</span>
                                      <span class="btn btn-secondary btn-sm rounded-end-pill"> <i class=" fa-solid fa-plus"></i></span>
                                </div>
                                
                            </div>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
                            quas accusamus nem a! A aspernatur necessitatibus,
                            consequuntur officia tenetur facere earum dolorem nobis magni
                            quae alias labore quaerat voluptas. Ducimus.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus
                            officiis rerum cum nesciunt. Voluptatum, facere, dolore,
                            ipsam ratione fuga numquam non qui molestias praesentium amet suscipit soluta. Dolore, eos amet.
                        </p>

                        </div>
                        <div>
                            <a href="" class="btn theme-green-btn text-light rounded-pill me-1 px-3 py-2">Add to cart</a>
                            <a href="" class=" btn theme-orange-btn text-light rounded-pill px-3 py-2">Buy Now</a>
                        </div>
                    </div>

                </div>

                <div class="my-4">
                    <h4>Product Description </h4>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
                        quas accusamus nem a! A aspernatur necessitatibus,
                        consequuntur officia tenetur facere earum dolorem nobis magni
                        quae alias labore quaerat voluptas. Ducimus.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus
                        officiis rerum cum nesciunt. Voluptatum, facere, dolore,
                        ipsam ratione fuga numquam non qui molestias praesentium amet suscipit soluta. Dolore, eos amet.
                    </p>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
                        quas accusamus nem a! A aspernatur necessitatibus,
                        consequuntur officia tenetur facere earum dolorem nobis magni
                        quae alias labore quaerat voluptas. Ducimus.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus
                        officiis rerum cum nesciunt. Voluptatum, facere, dolore,
                        ipsam ratione fuga numquam non qui molestias praesentium amet suscipit soluta. Dolore, eos amet.
                    </p>
                </div>
                {{-- Related Product --}}
                <div>
                    <section>
                        <div class="container">
                            <div class="d-flex ">
                                <div class=" flex-grow-1 ">
                                    <h2 class="">Related Product</h2>
                                </div>
                                <div class=""><a href="#"class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View
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
                                     <div  class="form-text fs-4"> Rate this product.*
                                        <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                     </div>

                                    <div class="row my-3">
                                        <div class="col-lg-6 pb-3">
                                            <input type="text" class="form-control form-control-lg" name="name" placeholder="enter the name" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                              <input type="email" class="form-control form-control-lg" name="email" placeholder="enter the email" id="">
                                        </div>
                                        <div class="col-lg-12 pb-3">
                                            <textarea class="form-control form-control-lg" placeholder="Your are message" rows="3"></textarea>
                                        </div>
                                        <div><a class="btn theme-orange-btn  text-light rounded-pill">Paost a Comment <i class="fa-solid fa-circle-arrow-right"></i></a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
