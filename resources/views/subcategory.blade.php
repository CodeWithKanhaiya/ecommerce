@extends('layouts.main')
@push('title' )
<title>Sub-Category Page</title>
@endpush
@section('content')
<div class="container-flue bg-light p-5">
<h1 class="text-center"><i class="fa-sharp fa-solid fa-table-list"></i> Sub Category</h1>
</div>
{{-- product-section --}}
<section class="py-5">
  <div class="container">
        
        <div class="row theme-product">
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href="{{url('category/{electronice}/tv/detail')}}"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="{{url('category/{electronice}/tv/detail')}}" class="text-dark text-decoration-none"> MI LED TV</a></h6>
                       <h5 class="card-title text-center"> ₹ 5999.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none"> Sumsung LED TV</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none"> Sony LED TV</a></h6>
                       <h5 class="card-title text-center"> ₹ 499.00</h5>
                    </div>
                </div>
          </div>
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href=""><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="#" class="text-dark text-decoration-none"> LED TV</a></h6>
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