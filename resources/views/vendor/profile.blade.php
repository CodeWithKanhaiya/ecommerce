    @extends('vendor.includes.main')
    @push('title')
        <title> profile</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                 @if(session('msg'))
                          <div class="alert alert-success">
                          {{ session('msg') }}
                             </div>
                                 @endif
                 <form action="{{url('vendor/profile')}}" method="post" enctype="multipart/form-data">
                                     @csrf
                                      @method('PUT')
                <div class="container p-4 ">
                          
                    <div class="card p-4">

                        <div class="row mt-3">
                            <div class="col-xl-8 col-md-8">
                                <h4>Basic Information</h4>

                                <div class="row">
                                   
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Identification Number</label>
                                        <input type="text" name="id_number" class="form-control" 
                                            value="{{$vendor->id_number}}">
                                            @error('id_number')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label  class="form-label">Business Name</label>
                                        <input type="text" name="business_name" class="form-control"
                                            value="{{$vendor->business_name}}">
                                             @error('business_name')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label  class="form-label">Username</label>
                                        <input type="text" name="full_name" class="form-control"
                                            value="{{$vendor->full_name}}">
                                              @error('full_name')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label  class="form-label">Email</label>
                                        <input type="email" name="email"class="form-control"
                                             value="{{$vendor->email}}">
                                               @error('email')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label  class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control" 
                                             value="{{$vendor->phone}}">
                                               @error('phone')
                                                 <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label  class="form-label">Address</label>
                                        <textarea  class="form-control" name="address">{{$vendor->address}}</textarea>
                                          @error('address')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>

                                </div>


                            </div>
                            <div class="col-xl-4 col-md-4 mt-5">
                                <div class="text-center">
                                    <img src="{{ asset('storage/'.$vendor->image) }}" style="width:150px;"
                                        alt="">
                                    <div class="mt-3">
                                        <label for="image" class="form-label  btn btn-primary">Choose Image</label>
                                        <input type="file" name="image" class="form-control d-none" id="image">
                                          @error('image')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card p-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <h4>Business Information</h4>
                                <div class="row mt-3">
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <label  class="form-label">Business Type</label>
                                        <select class="form-select" name="business_type" aria-label="Default select example">
                                            
                                            <option @if($vendor->business_type=='sole propritor') selected @endif value="Sole Propritor">Sole Propritor</option>
                                            <option @if($vendor->business_type=='Partnership') selected @endif value="Partnership">Partnership</option>
                                            <option @if($vendor->business_type=='Comporation') selected @endif value="Comporation">Comporation</option>
                                              @error('business_type')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-3">
                                        <label  class="form-label">GST No.</label>
                                        <input type="text"name="gst_number" class="form-control"
                                            value="{{$vendor->gst_number}}">
                                              @error('gst_number')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 mb-3">
                                        <label  class="form-label">Business Category</label>
                                        <input type="text" name="business_category" class="form-control"
                                                value="{{$vendor->business_category}}">
                                              @error('business_category')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>

                                
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="card p-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <h4>Payment Information</h4>
                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6 mb-3">
                                        <label  class="form-label">Bank Account No.</label>
                                        <input type="text"name="bank_account_no" class="form-control" 
                                            value="{{$vendor->bank_account_no}}">
                                              @error('bank_account_no')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Prefer Payment Method</label>
                                        <select class="form-select"name="payment_method" aria-label="Default select example">
                                             
                                            <option  @if($vendor->payment_method=='PayPal') selected @endif  value="PayPal">PayPal</option>
                                            <option  @if($vendor->payment_method=='Bank Transfor') selected @endif  value="Bank Transfor">Bank Transfor</option>
                                            <option @if($vendor->payment_method=='E wallet') selected @endif  value="E wallet">E wallet</option>
                                            
                                        </select>
                                          @error('payment_method')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>



                                </div>

                            </div>

                        </div>

                    </div>
             </div>

             </form>


            </main>
        @endsection
