@extends('vendor.layouts.main')
@push('title')
<title> vendor login</title>
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
                                <div>
                                    <form>
                                    <div class="row">
                                        
                                    
                                    <div class="col-lg-12 mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Number</label>
                                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="enter your number">
                                        
                                    </div>
                                     <div class="col-lg-12 mb-3">
                                             <label for="exampleInputEmail1" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="******">
                                        
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="******">
                                        
                                    </div>
                                   
                                    
                                    </div>
                                    
                                    <a href="" type="btn" class="btn btn-primary text-light form-control form-control-lg">Change Password</a>
                                    <div class="text-center p-2"> Have an account? <a href="{{url('vendor/login')}}" class="text-decoration-none">login</a></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
@endsection
