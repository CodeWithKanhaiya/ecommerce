    @extends('user.layouts.main')
    @push('title')
    <title> order-History</title>
    @endpush
    @section('content')
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                     
                        <div class="row my-5">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex"> 
                                    <h4>Order-History</h4>
                                   
                                </div>
                             <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                        <th scope="row">001</th>
                                        <td>25-12/2024</td>
                                        <td>  ₹ 1950.00 (2 products)</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning">Processing</span>
                                            <a href="{{url('detail')}}" class="text-decoration-none mx-2"> View Details</a>
                                        </td>
                                        </tr>
                                       
                                        <tr>
                                        <th scope="row">002</th>
                                        <td>25-12/2024</td>
                                        <td> ₹1950.00 (3 product)</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-info">On the Way</span>
                                            <a href="{{url('detail')}}" class="text-decoration-none mx-2"> View Details</a>
                                        </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">003</th>
                                        <td>25-12/2024</td>
                                        <td>  ₹ 1950.00(4 products)</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning">Delevered</span>
                                            <a href="{{url('detail')}}" class="text-decoration-none mx-2"> View Details</a>
                                        </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">004</th>
                                        <td>25-12/2024</td>
                                        <td>  ₹ 1950.00(4 products)</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning">Delevered</span>
                                            <a href="{{url('detail')}}" class="text-decoration-none mx-2"> View Details</a>
                                        </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">005</th>
                                        <td>25-12/2024</td>
                                        <td>  ₹ 1950.00(4 products)</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning">Delevered</span>
                                            <a href="{{url('detail')}}" class="text-decoration-none mx-2"> View Details</a>
                                        </td>
                                        </tr>
                                       
                                       
                                    </tbody>
                                    </table>
                                   
                                    </div>
                                    <div class="my-4">
                                         {{--  start pagination --}}
                                    <nav>
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                                </li>
                                            </ul>
                                            </nav>
                                            {{-- end pagination --}}
                                    </div>

                            </div>
                        </div>

                    </div>
                </main>
       
@endsection