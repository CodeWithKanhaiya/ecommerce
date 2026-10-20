@extends('layouts.main')
@push('title')
    <title>Product Detail</title>
@endpush
@section('content')
    <div class="container-flue bg-light p-4">
        <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Cart List</h1>
    </div>
    {{-- Cart List --}}
    <section>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <table class="table">
                            <thead>
                                <tr>
                                <th scope="col"><h3>Product</h3></th>
                                <th scope="col"><h3>Price</h3></th>
                                <th scope="col"><h3>Quantity</h3></th>
                                <th scope="col"><h3>Subtotal<h3></th>
                                 <th scope="col"><h3>Remove<h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        <th>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{ asset('assets/images/products/9.jpg') }}" style="width:70px;" class="rounded-circle">
                                                    </div>
                                                    <div class="p-3"><h5> HandBag</h5></div>
                                                </div>
                                        </th>
                                            <td>₹ 2944.00 </td>
                                            <td>
                                                 <div class="d-flex flex-row  mb-3">
                                                    {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                                    <div class="p-1">
                                                        <span class=" btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                                        <span> 01</span>
                                                        <span class="btn btn-secondary btn-sm rounded-end-pill"> <i class=" fa-solid fa-plus"></i></span>
                                                    </div>
                                
                                                    </div>
                                            </td>
                                            <td>₹ 4400  .00</td>
                                            <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                
                                 <tr>
                                        <th>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{ asset('assets/images/products/5.jpg') }}" style="width:70px" class="rounded-circle">
                                                    </div>
                                                    <div class="p-3"><h5>Camery</h5></div>
                                                </div>
                                        </th>
                                            <td>₹ 2944.00 </td>
                                            <td>
                                                  <div class="d-flex flex-row  mb-3">
                                                    
                                                    <div class="p-1">
                                                        <span class=" btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                                        <span> 01</span>
                                                        <span class="btn btn-secondary btn-sm rounded-end-pill"> <i class=" fa-solid fa-plus"></i></span>
                                                    </div>
                                
                                                    </div>
                                            </td>
                                            <td>₹ 4400  .00</td>
                                            <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                 <tr>
                                        <th>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{ asset('assets/images/products/8.jpg') }}" style="width:70px" class="rounded-circle">
                                                    </div>
                                                    <div class="p-3"><h5>Washig Machine</h5></div>
                                                </div>
                                        </th>
                                            <td>₹ 2944.00 </td>
                                            <td>
                                                  <div class="d-flex flex-row  mb-3">
                                                    
                                                    <div class="p-1">
                                                        <span class=" btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                                        <span> 01</span>
                                                        <span class="btn btn-secondary btn-sm rounded-end-pill"> <i class=" fa-solid fa-plus"></i></span>
                                                    </div>
                                
                                                    </div>
                                            </td>
                                            <td>₹ 4400  .00</td>
                                            <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                 <tr>
                                        <th>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{ asset('assets/images/products/9.jpg') }}" style="width:70px" class="rounded-circle">
                                                    </div>
                                                    <div class="p-3"><h5>Bag</h5></div>
                                                </div>
                                        </th>
                                            <td>₹ 2944.00 </td>
                                            <td>
                                                  <div class="d-flex flex-row  mb-3">
                                                    <div class="p-1">
                                                        <span class=" btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                                        <span> 01</span>
                                                        <span class="btn btn-secondary btn-sm rounded-end-pill"> <i class=" fa-solid fa-plus"></i></span>
                                                    </div>
                                
                                                    </div>
                                            </td>
                                            <td>₹ 4400  .00</td>
                                            <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                                </tr>
                                
                                
                            </tbody>
                            </table>
            </div>
            <div class="col-lg-5 ms-auto my-5">
                <div>
                    <h3>Price Detail</h3>
                    <hr>
                </div>
                    <div class="d-flex">
                        <div><h5>SubTotal</h5></div>
                        <div class="ms-auto"> <h5>₹ 2944.00</h5></div>
                    </div>
                    <div class="d-flex">
                        <div><h5>Discount</h5></div>
                        <div class="ms-auto"> <h5>₹ 200.00</h5></div>
                    </div>
                     <div class="d-flex">
                        <div><h5>Delivery Charges</h5></div>
                        <div class="ms-auto"> <h5>FREE</h5></div>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div><h5>Total</h5></div>
                        <div class="ms-auto"> <h5>2744</h5></div>
                    </div>
                    <div class="mt-4">
                        <a href="{{url('checkout/product')}}" class="btn theme-orange-btn text-light rounded-pill w-100" >Procceed to checkout <i class="fa-solid fa-right-long"></i></a>
                    </div>
            </div>
        </div>
        </div>
    </section>
@endsection
