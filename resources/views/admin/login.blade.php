@extends('admin.layouts.main')
@push('title')
<title> login</title>
@endpush
@section ('content')
      
        <section>
            <div class="container position-absolute top-50 start-50 translate-middle">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('dashboard/assets/img/adminloginimage.png') }}" class=" img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <form>
                                    <div class="row">
                                        
                                    
                                    <div class="col-lg-12 mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="john@gmail.com">
                                        
                                    </div>
                                     <div class="col-lg-12 mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="******">
                                        
                                    </div>
                                   
                                    
                                    </div>
                                    
                                    <a href="{{url('vendor/login')}}" type="btn" class="btn btn-primary text-light form-control form-control-lg">login</a>
                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
@endsection
