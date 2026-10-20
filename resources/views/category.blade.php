@extends('layouts.main')
@push('title' )
<title>Category Page</title>
@endpush
@section('content')
<div class="container-flue bg-light p-5">
<h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Category</h1>
</div>
{{-- product-section --}}
<section class="py-5">
  <div class="container">
        
        <div class="row theme-product">
           <div class="col-lg-3 mb-4">
              <div class="card">
                <a href=""><img src="{{asset('assets/images/products/1.jpg')}}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Campas Shoes</a></h6>
                      <h5 class="card-title text-center"> ₹ 499.00</h5>
                </div>
          </div>
          </div>
          <div class="col-lg-3 mb-4">
              <div class="card">
               <a href=""> <img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                   <h6 class="card-title text-center"> <a href="#"class="text-dark text-decoration-none">Apply Watch</a></h6>
                      <h5 class="card-title text-center"> ₹ 499.00</h5>
                </div>
          </div>
          </div>
          <div class="col-lg-3 mb-4">
              <div class="card">
               <a href=""> <img src="{{asset('assets/images/products/3.jpg')}}" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"> <a href="#"class="text-dark text-decoration-none">Nike Cap</a></h6>
                      <h5 class="card-title text-center"> ₹ 499.00</h5>
                </div>
          </div>
          </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/4.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Camera</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/6.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Shoes</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href="{{url('category/electronics/tv')}}"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">LED Tv</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Washing</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/9.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Hand Bag</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/10.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none">Loptop Bag</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          
          
      </div>
      
      </div>
      </div>
  </div>
</section>

@endsection