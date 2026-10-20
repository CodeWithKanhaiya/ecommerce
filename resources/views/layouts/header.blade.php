<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" 
crossorigin="anonymous" referrerpolicy="no-referrer">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg theme-navbar">                                                                                                                                                                                                                                                                                                             
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="" style="width:250px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="" id="navbarSupportedContent">
      
      <form class="d-flex" role="search">
        <div class="input-group">
        <input class="form-control form-control-sm" style="width:350px" type="search" placeholder="Search for Product" aria-label="Search">
        <button class="btn btn-light  btn-sm text-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
    </div>
    <div class=""><a href="#" class="text-decoration-none text-light"> Became a Seller</a>
      <a href="{{url('cart-list/product')}}" class="btn theme-green-btn btn-sm text-light rounded-pill px-3 py-2" ><i class="fa-solid fa-cart-shopping"></i>Cart</a>
      <a href="{{url('login')}}" class="btn theme-orange-btn  btn-sm text-light rounded-pill px-3 py-2  "><i class="fa-sharp fa-solid fa-user"></i>Login</a>
    </div>
  </div>
</nav>
{{-- category nav --}}
<nav class="navbar navbar-expand-lg  shadow p-3  bg-body rounded">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="{{url('category/electronics')}}">Mobile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Farniture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Grocery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="{{url('category/{electronice}/tv')}}">Applinces</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
