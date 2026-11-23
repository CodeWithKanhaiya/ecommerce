    @extends('admin.layouts.main')
    @push('title')
        <title> View-banner</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                          @session('msg')
                                    <div class="alert alert-success">
                                        {{ session('msg') }}
                                    </div>
                                    @endsession
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    
                                    <h4>View Website Banner</h4>

                                </div>
                                <div class="">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <h5>Sn No</h5>
                                                </th>
                                                <th scope="col">
                                                    <h5>Banner Image </h5>
                                                <th>Alt Text</th>
                                                </th>
                                                <th scope="col">
                                                    <h5>Action</h5>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($banners as $banner)
                                                <tr>
                                                    <td>{{$banner->b_id}}</td>

                                                    <td> <img src="{{ asset('storage/'.$banner->b_image)}}"
                                                            style="width:250px;"></td>
                                                    <td>{{$banner->b_alt}}</td>

                                                    <td>

                                                        <form method="post" action="{{ url('admin/delete-banner',$banner->b_id) }}"  onsubmit="return confirm('Are you sure you want to delete this category?')" class="d-inline-block">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger btn-sm" ><i
                                                                class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </td>


                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </main>
        @endsection
