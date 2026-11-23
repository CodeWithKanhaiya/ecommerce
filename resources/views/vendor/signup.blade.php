@extends('vendor.layouts.main')
@push('title')
<title> vendor Register</title>
@endpush
@section ('content')
      
        <section>
            <div class="container position-absolute top-50 start-50 translate-middle">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('dashboard/assets/img/ecommarceimg1.png') }}" class=" img-fluid">
                            </div>
                            <div class="col-lg-6">
                                @session('msg');
                                    <div class="alert alert-success">{{ session('msg') }}</div>
                                    @endsession
                                
                                <div>
                            <form method="post" action="{{url('vendor/signup')}}">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                                <input value="{{old('full_name')}}" type="text" class="form-control"name="full_name"  id="exampleInputEmail1" placeholder="John Doe">
                                                    @error('full_name')
                                                    <div class="text-danger">
                                                        {{{$message}}}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                                <input value="{{old('phone')}}" type="tel" class="form-control"name="phone" id="exampleInputEmail1" placeholder="+91">
                                                 @error('phone')
                                                    <div class="text-danger">
                                                        {{{$message}}}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input value="{{old('email')}}" type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="john@gmail.com">
                                                 @error('email')
                                                    <div class="text-danger">
                                                        {{{$message}}}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                                <input  type="password" class="form-control"name="password" id="exampleInputEmail1" placeholder="******">
                                                 @error('password')
                                                    <div class="text-danger">
                                                        {{{$message}}}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                                
                                                    <textarea  class="form-control" name="address" placeholder="Enter your address" id="floatingTextarea">{{ old('address') }}</textarea>
                                                     @error('address')
                                                    <div class="text-danger">
                                                        {{{$message}}}
                                                    </div>
                                                    @enderror
                                                
                                                
                                            </div>
                                            
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary text-light form-control form-control-lg">Signup</button>
                                            <div class="text-center p-2">Have an account? <a href="{{url('vendor/login')}}" class="text-decoration-none">login</a></div>
                              </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
@endsection
