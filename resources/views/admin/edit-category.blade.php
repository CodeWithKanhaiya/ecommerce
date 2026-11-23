    @extends('admin.includes.main')
    @push('title')
        <title> edit categary</title>
    @endpush
    @section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                        <div class="row">
                            <div class="col-xl-8 col-md-8">


                                <h4>Edit category</h4>
                                <div class="row mt-3">

                                    <form method="post" action={{ url('admin/edit-category', $category->c_id) }}>
                                        @csrf
                                        @method('put')
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label"> Parent Category</label>
                                            <select class="form-select" name="p_c_id">


                                                <option value="0">Select Parent Category</option>
                                                
                                                @foreach($p_category as $cat)

                                                <option @if($cat->c_id==$category->p_c_id)
                                                    selected
                                                    @endif value="{{$cat->c_id}}">{{$cat->c_name}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                            <input type="text" name="c_name" class="form-control"
                                                id="exampleInputEmail1" value="{{ $category->c_name }}">

                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-12 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Commision(%)</label>
                                                <input type="text" name="c_commision" class="form-control"
                                                    id="exampleInputEmail1" value="{{ $category->c_commision }}">

                                            </div>

                                            <div class="col-lg-3">
                                                <button type="submit"class="btn btn-primary btn-sm">Edit Category</button>
                                            </div>
                                    </form>

                                </div>


                            </div>

                        </div>


                    </div>

                </div>
            </main>
        @endsection
