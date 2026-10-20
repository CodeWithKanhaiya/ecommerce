    @extends('user.layouts.main')
    @push('title')
    <title> order-History</title>
    @endpush
    @section('content')
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row my-5">
                            <h6>Order Details:Dec 25, 2024.(3 products)</h6>
                             <div class="col-xl-6 col-md-6 ">
                                     <h5 class="text-dark">Billing Address</h5>
                                      
                                      <h6 class="text-dark">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots </h6>
                                       <span  class="text-dark"><strong>Email:</strong>john@gmail.com </span><br>
                                       <span  class="text-dark"><strong>Phone:</strong> +91 830379865</span><br>
                                
                            </div>
                             <div class="col-xl-6 col-md-6 "> 
                                 <h5 class="text-dark">Order Sumary</h5>
                            
                                       <span  class="text-dark"><strong>Order id:</strong>001 </span><br>
                                       <span  class="text-dark"><strong>Payment Method:</strong> Cash On Delevery</span><br>
                                       <span  class="text-dark"><strong>Subtotal:</strong>₹ 2944.00 </span><br>
                                       <span  class="text-dark"><strong>Discount:</strong>₹ 2944.00 </span><br>
                                       <span  class="text-dark"><strong>Shipping Fee:</strong>Fee</span><br>
                                
                             </div>


                        </div>

                    </div>
                </main>
       
@endsection