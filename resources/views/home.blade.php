@extends('layouts.main')
@push('title')
    <title>Home Page</title>
@endpush
@section('content')
    {{-- open slider --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            @for ($i = 0; $i < count($banners); $i++)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
            @endfor

        </div>
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $banner->b_image) }}" class="d-block w-100" alt="{{ $banner->b_alt }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- end slider --}}
    {{-- product-section --}}
    <section class="py-5">
        <div class="container">
            <div class="d-flex ">
                <div class=" flex-grow-1 ">
                    <h1>Top Deals</h1>
                </div>
                <div><a href="{{ url('category/{electronice}') }}"
                        class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>

            </div>
            <div class="row theme-product row-gap-4">
                @foreach ($products as $product)
                    <div class="col-lg-3">
                        <div class="card">
                            <a href=""><img src="{{ asset('storage/' . $product->P_image) }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center"> <a href="#"
                                        class="text-dark text-decoration-none">{{ $product->P_name }}</a></h6>
                                <h5 class="card-title text-center">{{ $product->P_price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--  Best of Electronics --}}
    <section class="py-5">
        <div class="container">
            <div class="d-flex ">
                <div class=" flex-grow-1 ">
                    <h2 class=""> Best of Electronics </h2>
                </div>
                <div class=""><a href="{{ url('category/{electronice}') }}"
                        class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>

            </div>
            <div class="row theme-product">
                @foreach ($electronics as $subcategory)
                    @php
                        $product = $subcategory->products->first();
                    @endphp

                    @if ($product)
                        <div class="col-lg-3">
                            <div class="card">

                                <a href="#">
                                    <img src="{{ asset('storage/' . $product->P_image) }}" class="card-img-top"
                                        alt="{{ $product->P_name }}">
                                </a>

                                <div class="card-body">

                                    <h6 class="card-title text-center">
                                        <a href="#" class="text-dark text-decoration-none">
                                            {{ $product->P_name }}
                                        </a>
                                    </h6>

                                    <h5 class="card-title text-center">
                                        {{ $product->P_price }}.00
                                    </h5>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>


    {{--  Popular products --}}
    <section class="py-5">
        <div class="container">
            <div class="d-flex ">
                <div class=" flex-grow-1 ">
                    <h2 class=""> Popular Products </h2>
                </div>
                <div class=""><a
                        href="{{ url('category/{electronice}') }}"class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View
                        All</a></div>

            </div>
            <div class="row theme-product">
                @foreach ($popular as $pop)
                    <div class="col-lg-3">
                        <div class="card">
                            <a href=""><img src="{{ asset('storage/' . $pop->P_image) }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center"> <a href="#"
                                        class="text-dark text-decoration-none">{{ $pop->P_name }}</a></h6>
                                <h5 class="card-title text-center">{{ $pop->P_price }}.00</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Recently-Viewed-section --}}

    <section class="py-5">
        <div class="container">
            <div class="d-flex ">
                <div class=" flex-grow-1 ">
                    <h2 class="">Recently Viewed</h2>
                </div>
                <div class=""><a
                        href="#"class="btn btn-sm theme-orange-btn text-light  rounded-pill px-3 py-2">View All</a>
                </div>

            </div>
            <div class="row theme-product">
                @foreach ($recent as $rec)
                    <div class="col-lg-3">
                        <div class="card">
                            <a href=""><img src="{{ asset('storage/' . $rec->P_image) }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h6 class="card-title text-center"> <a href="#"
                                        class="text-dark text-decoration-none">{{ $rec->P_name }}</a></h6>
                                <h5 class="card-title text-center"> {{ $rec->P_price }}.00</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
