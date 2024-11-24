@extends('bankend.master')
@section('content')

    @section('site-title')
        Admin | Add Post
    @endsection
    @section('page-main-title')
        Remove Category Product
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/delete-submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                      
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-danger" value="Delete Category">
                                    <a href="/list-category" class="btn btn-success">No</a>
                                </div>
                        </div>
                    </div>
                </form>
    
            </div>
        </div>
    </div>

@endsection
