@php
    use App\Models\Category;
    $category = Category::where('p_c_id', 0)->get();
    $user = auth()->user();
@endphp

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css"
        integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg theme-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="" style="width:250px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="navbarSupportedContent">

                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control form-control-sm" style="width:350px" type="search"
                            placeholder="Search for Product" aria-label="Search">
                        <button class="btn btn-light  btn-sm text-secondary" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <div><a href="{{ url('vendor/signup') }}" target="_blank"
                    class="text-decoration-none text-light"> Became a Seller</a>
                  @if($user && $user->is_login)
                        <a href="{{ url('user/'. $user->user_id)}}"
                            class="btn theme-orange-btn  btn-sm text-light rounded-pill px-3 py-2  "><i
                            class="fa-sharp fa-solid fa-user"></i>Dashboard
                </a>
                    @else
                <a href="{{ url('login') }}"
                            class="btn theme-orange-btn  btn-sm text-light rounded-pill px-3 py-2  "><i
                            class="fa-sharp fa-solid fa-user"></i>Login
                </a>
                @endif
                <a href="{{ url('cart-list/product') }}" class="position-absolute mt-1 mx-2"><i class="fa-solid fa-2x fa-cart-shopping text-white"></i>
                    <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                     </span>
                </a>
            </div>
        </div>
    </nav>
    {{-- category nav --}}
    <nav class="navbar navbar-expand-lg  shadow p-3  bg-body rounded">
        <div class="container-fluid">

            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="nav">
                    @foreach ($category as $cat)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/electronics') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $cat->c_name }}
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('category', $cat->c_name) }}">All</a></li>
                                @if ($cat->subCategory->count() > 0)
                                    @foreach ($cat->subCategory as $subcat)
                                        <li><a class="dropdown-item"
                                                href="{{ route('category.sub_category', ['category' => $cat->c_name, 'sub_category' => $subcat->c_name]) }}">{{ $subcat->c_name }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </nav>
<script>
function update_cart_count(){
    var cart =JSON.parse(localStorage.getItem("cart"))||[];
    let totalQty = cart.reduce((sum,item)=>sum+item.quantity,0);
    $("#cart-count").text(totalQty);
}
$(document).ready(function(){
    update_cart_count();
});
</script>