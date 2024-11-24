@extends('bankend.master')
@section('content')

    @section('site-title')
        Admin | Add Post
    @endsection
    @section('page-main-title')
        Update Category Product
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/edit-category-submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                      
                        <div class="card-body">

                            <div class="row">
                            <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label">ID</label>
                                    <input class="form-control" type="text" name="id"  value="{{$edit[0]->id}}"/>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="name"  value="{{$edit[0]->name}}"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success" value="Edit category">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
