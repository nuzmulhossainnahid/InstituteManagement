
@extends('admin.main')
@section('title')
    Add New Batch
@endsection
@section('style')
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="admin/vendors/summernote/dist/summernote-bs4.css">
    <!-- End plugin css for this page -->
@endsection
@section('body')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Add New Teacher
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Teacher</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Teacher</li>
                    </ol>
                </nav>
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{url('addNewTeacher')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h4 class="card-title">Teacher Name</h4>
                                    <input type="text" required name="name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Email</h4>
                                    <input type="email" required name="email" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Phone No</h4>
                                    <input type="number" required name="phone" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Department</h4>
                                    <input type="text" required name="department" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Experience</h4>
                                    <input type="text" name="experience" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Language</h4>
                                    <input type="text"  name="language" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" name="image" class="dropify" />
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">About Instructor</h4>
                                    <textarea name="description" id="summernoteExample"></textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Qualification</h4>
                                    <textarea name="qualification"  id="summernoteExample1"></textarea>
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
@section('script')

    <!-- plugin js for this page -->
    <script src="admin/vendors/tinymce/tinymce.min.js"></script>
    <script src="admin/vendors/tinymce/themes/modern/theme.js"></script>
    <script src="admin/vendors/summernote/dist/summernote-bs4.min.js"></script>
    <!-- plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="admin/js/editorDemo.js"></script>
    <!-- End custom js for this page-->

    <!-- Custom js for this page-->
    <script src="admin/js/dropify.js"></script>
    <!-- End custom js for this page-->
@endsection