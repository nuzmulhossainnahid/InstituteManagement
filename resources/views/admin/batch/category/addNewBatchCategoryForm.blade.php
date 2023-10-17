@extends('admin.main')
@section('title')
    Add New Batch Category
@endsection

@section('body')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">
                    Add New Batch Category
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('addNewCategory')}}">Batch Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Batch Category </li>
                    </ol>
                </nav>
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{url('newBatchCategory')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h4 class="card-title">Batch Category Name</h4>
                                    <input type="text" name="catName" class="form-control"/>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success btn-sm w-100">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection
