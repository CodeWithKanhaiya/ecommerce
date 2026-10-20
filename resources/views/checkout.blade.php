@extends('layouts.main')
@push('title')
    <title>Checkout Page</title>
@endpush
@section('content')
    <div class="container-flue bg-light p-4">
        <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Checkout</h1>
    </div>
    {{-- Checkout --}}
    <section>
                    <div class="container  my-5">
                        <h2>Billingn Details</2>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="">
                                    <div class="row my-3">
                                        <div class="col-lg-12 mb-3">
                                            <select class="form-select " aria-label="Default select example">
                                                    <option selected>Select your Country</option>
                                                    <option value="1">India</option>
                                                    <option value="2">Australias</option>
                                                    <option value="3">Nepal</option>
                                                     <option value="3">USA</option>
                                                </select>
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                            <input type="text" class="form-control " name="name" placeholder="First name" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                            <input type="text" class="form-control " name="name" placeholder="Last Name" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                              <input type="email" class="form-control " name="email" placeholder="Email" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                            <input type="tel" class="form-control" name="number" placeholder="Number" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                            <input type="number" class="form-control " name="Pincode" placeholder="Pincode" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                            <input type="text" class="form-control" name="landmark" placeholder="Landmark" id="">
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                                    <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select your City</option>
                                                    <option value="1">Lucknow</option>
                                                    <option value="2">Basti</option>
                                                    <option value="3">Kanpur</option>
                                                     <option value="3">Gaurakpur</option>
                                                </select>
                                        </div>
                                        <div class="col-lg-6 pb-3">
                                           <select class="form-select " aria-label="Default select example">
                                                    <option selected>Select your State</option>
                                                    <option value="1">Utter Pradesh</option>
                                                    <option value="2">Punjab</option>
                                                    <option value="3">Goa</option>
                                                     <option value="3">Bhair</option>
                                                </select>
                                        </div>
                                        <div class="col-lg-12 pb-3">
                                            <textarea class="form-control" placeholder=" Address" rows="3"></textarea>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                {{--  your order   --}}
                <section>
        <div class="container">
             <h3>Your Orders</h3>
            <div class="row mb-5 bg-light p-5">
            <div class="col-lg-12">
                <table class="table">
                            <thead>
                                <tr>
                                <th scope="col"><h5>Product</h5></th>
                                <th scope="col"><h5>Price</h5></th>
                                <th scope="col"><h5>Quantity</h5></th>
                                <th scope="col"><h5>Subtotal<h5></th>
                                 
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
                                            01
                                            </td>
                                            <td>₹ 4400  .00</td>
                                            
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
                                            02
                                            </td>
                                            <td>₹ 4400  .00</td>
                                            
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
                                                 02
                                            </td>
                                            <td>₹ 4400  .00</td>
                                        
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
                                                03
                                            </td>
                                            <td>₹ 4400  .00</td>
                                        
                                </tr>
                                        <tr>
                                            <th colspan="3">Total</th>
                                           <th><h4> 20000.00</h4></th>
                                                    
                                                
                                         </tr>
                                
                                
                            </tbody>
                            </table>
            </div>
          
        </div>
        </div>
    </section>
    {{-- Payment --}}
    <section>
        <div class="container">
            <div class="row">
                        
            <div class="col-lg-5">
                        <div class="form-check">
                                <input class="form-check-input " type="radio" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    <h5>UPI</h5>
                                </label>
                        </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                   <h5> Credit/Debit/Card</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                   <h5> Cash on Delivery</h5>
                                </label>
                            </div>
                            <div>
                                <a  class="btn theme-orange-btn text-light rounded-pill mt-3">Place Order</a>
                            </div>
            </div>

            </div>
        </div>
    </section>
@endsection
