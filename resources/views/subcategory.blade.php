@extends('layouts.main')
@push('title' )
<title>Sub-Category Page</title>
@endpush
@section('content')
<div class="container-flue bg-light p-5">
<h1 class="text-center"><i class="fa-sharp fa-solid fa-table-list"></i>{{ ($subcat->parentCategory?->c_name ?? '-') . '/' . $subcat->c_name }}</h1>
</div>
{{-- product-section --}}
<section class="py-5">
  <div class="container">
        
        <div class="row theme-product">
            @if($subcat->products->count()>0)
            @foreach($subcat->products as $product)
          <div class="col-lg-3 mb-4">
                <div class="card">
                  <a href="{{route('product_detail',['category'=>$subcat->parentCategory?->c_name,
                          'sub_category'=>$subcat->c_name,'product_detail'=>$product->P_name])}}">
                    <img src="{{asset('storage/'.$product->P_image)}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                      <h6 class="card-title text-center"> <a href="{{url('category/{electronice}/tv/detail')}}" class="text-dark text-decoration-none">{{$product->P_name}}</a></h6>
                       <h5 class="card-title text-center"> ₹ {{$product->P_price}}</h5>
                    </div>
                </div>
          </div>
          @endforeach
         @else <p class="text-center alert alert-danger">Data not found </p>
         @endif
      </div>
      
      </div>
      </div>
  </div>
</section>

@endsection