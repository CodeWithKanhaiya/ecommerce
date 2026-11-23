    @extends('vendor.includes.main')
    @push('title')
    <title> Users</title>
    @endpush
    @section('content')
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       <div class="card p-4 mt-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <h4>Users</h4>

                                </div>
                                <div class="mt-3">
                                    
                                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                     <th scope="col">Sr. No</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>

                                            <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Ram</td>
                                                        <td>john@gmail.com</td>
                                                        <td> Lucknow</td>
                                                        <td>
                                                           
                                                            <a href="{{('order-detail')}}" class="text-decoration-none btn btn-warning btn-sm">
                                                                <i class="fa-sharp-duotone fa-regular fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                            </tbody>
                            </table>

                                </div>


                            </div>
                        </div>
                    </div>
                    </div>
       </main>
@endsection