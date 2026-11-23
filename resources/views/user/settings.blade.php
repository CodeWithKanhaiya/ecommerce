    @extends('user.layouts.main')
    @push('title')
    <title>Settings</title>
    @endpush
      @php
    $user = auth()->user();

    $billing = null;
    $orders = collect();

    if ($user && $user->is_login) {

        $billing = App\Models\Billing::where('user_id', $user->user_id)->first();

        $orders = App\Models\Order::where('user_id', $user->user_id)->get();
    }
@endphp
    @section('content')
       
            <div id="layoutSidenav_content">
                <main>
                   <div class="container p-4 ">
                        <form action="{{ route('user.settings.update', ['update' => $user->user_id]) }}" method="POST">
                            @csrf
                        <div class="card p-4">
                         <div class="row mt-3">
                        <div class="col-xl-8 col-md-8">
                            <h4>Account Settings</h4>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="John" value="{{$billing->fullname}}">
                                </div>
                                     
                                
                                <div class="col-lg-12 mb-3">
                                         <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"value="{{$billing->email}}">
                                </div>
                                 <div class="col-lg-12 mb-3">
                                         <label class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control"  placeholder="+91" disabled value="{{$user->phone}}">
                                </div>
                                  
                            </div>
                            

                        </div>
                         <div class="col-xl-4 col-md-4 mt-5">
                                {{-- <div class="text-center">
                                     <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:150px;" alt="">
                                         <div class="mt-3">
                                            <label for="image" class="form-label  btn btn-primary">Choose Image</label>
                                              <input type="file" class="form-control d-none" id="image">
                                         </div>
                                </div> --}}
                         </div>
                    </div>
                        

                        </div>
                            <div class="card p-4 mt-4">
                                    <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <h4>Billing Address</h4>
                                        <div class="row mt-3">
                                                <div class="col-lg-12 col-md-12 mb-3">
                                                      <label  class="form-label">Country</label>
                                                        <select class="form-select" name="country" aria-label="Default select example">
                                                            <option disabled {{$billing->country==null ? 'selected':''}}>Select Your Country</option>
                                                            <option value="India" {{$billing->country=='India'? 'selected':''}}>India</option>
                                                            <option value="USA" {{$billing->country=='USA' ?'selected':''}}>USA</option>
                                                            <option value="Nepal" {{$billing->country=='Nepal' ?'selected':''}}>Nepal</option>
                                                        </select>
                                                  </div>
                                            
                                           
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                    <label class="form-label">Pin Code</label>
                                                    <input type="text"name="pincode" class="form-control"  placeholder="pincode" value="{{$billing->pincode}}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                    <label  class="form-label">Landmark</label>
                                                    <input type="text" name="landmark" class="form-control"  placeholder="LandMark" value="{{$billing->landmark}}">
                                            </div>
                                             <div class="col-lg-6 col-md-6 mb-3">
                                                      <label  class="form-label">City</label>
                                                        <select class="form-select" name="city" aria-label="Default select example">
                                                            <option disabled {{$billing->city==null ? 'selected':''}}>Select Your City</option>
                                                            <option value="Basti" {{$billing->city=='Basti' ? 'selected':''}}>Basti</option>
                                                            <option value="Lucknow"{{$billing->city=='Lucknow' ? 'selected':''}}>Lucknow</option>
                                                            <option value="Kanpur" {{$billing->city=='Kanpur' ? 'selected':''}}>Kanpur</option>
                                                        </select>
                                                  </div>
                                                  <div class="col-lg-6 col-md-6 mb-3">
                                                      <label name="state" class="form-label">State</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option disabled  {{$billing->state==null ? 'selected':''}}>Select Your State</option>
                                                            <option value="UP" {{$billing->state == 'UP'?'selected':''}}>UP</option>
                                                            <option value="BIHAR" {{$billing->state=='BIHAR' ? 'selected':''}}>BIHAR</option>
                                                            <option value="PUNJAB" {{$billing->state=='PUNJAB' ? 'selected':''}}>PUNJAB</option>
                                                        </select>
                                                  </div>
                                           
                                        </div>

                                </div>
                           
                </div>


                   </div>

                     <div class="col-lg-3 mt-4">
                         <button  type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                         </div>
                         </form>
                </main>
            
@endsection