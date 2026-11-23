@extends('layouts.main')
@push('title')
    <title>Register</title>
@endpush
@section('content')
    <div class="container-flue bg-light p-4">
        <h1 class="text-center"><i class="fa-sharp fa-solid fa-user"></i>User Register</h1>
    </div>
        <section>
            <div class="container my-5">    
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/register.jpg') }}" class=" img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <form>
                                    <div class="mb-3">
                                            {{-- <div class="form-text mb-2"> Plese enter your mobile number</div> --}}
                                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="+91 830379865">
                                        
                                    </div>
                                    <div class="mb-3">
                                     <div class="form-text mb-2">Enter Your OTP</div> 
                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="*****">
                                        
                                    </div>
                                    
                                    <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Signup</button>
                                    <div class="text-center p-4 my-4"> Have an account? <a  href="{{url('login')}}" class="text-decoration-none">Login</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
@endsection
