@extends('admin.main')
@section('title')
    Edit Batch
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
                    Edit Batch
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Batch</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Batch</li>
                    </ol>
                </nav>
            </div>
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{url('editBatchSubmit',$data->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h4 class="card-title">Batch Name</h4>
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Category</h4>
                                    <a href="{{url('addNewCategory')}}" class="btn btn-success mb-2">Add New Category </a>
                                    <h4 class="card-title">{{$data->category}}</h4>
                                    <select name="category" id="" class="form-control">
                                        @foreach($category as $cat)
                                            <option value="{{$cat->batch_category}}" class="font-weight-bold">{{$cat->batch_category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Teacher</h4>
                                    <a href="{{url('teacherView')}}" class="btn btn-success mb-2">Add New Teacher </a>
                                    <h4 class="card-title">{{$data->teacherName}}</h4>
                                    <select name="teacherId" id="" class="form-control">
                                        @foreach($teacher as $teacher)
                                            <option value="{{$teacher->id}}" class="font-weight-bold">{{$teacher->regNo}}-{{$teacher->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Price</h4>
                                    <input type="text" name="price" value="{{$data->price}}" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Date</h4>
                                    <input type="text" name="date" value="{{$data->date}}" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Time</h4>
                                    <input type="text" name="time" value="{{$data->time}}" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Student</h4>
                                    <input type="text" name="student" value="{{$data->student}}" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <h4 class="card-title">Description</h4>
                                    <textarea name="description" id="summernoteExample">{{$data->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Curriculum</h4>
                                    <textarea name="curriculum" id="simpleMde">{{$data->curriculum}}</textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Course Feature</h4>
                                    <textarea name="feature" id="summernoteExample1">{{$data->feature}}</textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-title">Title Image</h4>
                                    @if (isset($data->image1))
                                        <img src="BatchImage/{{$data->image1}}" alt="" height="80px" width="80px">
                                    @else
                                        <h4 class="card-title">No Image Added</h4>
                                    @endif
                                    <input type="file" name="image1" class="dropify" />
                                    <a class="btn btn-success mt-2" id="toggleDiv">Add Another Image <i class="fa fa-plus-square"></i></a>
                                </div>

                                <div class="form-group">
                                    <h4 class="card-title">Image-2</h4>
                                    @if (isset($data->image2))
                                    <img src="BatchImage/{{$data->image2}}" alt="" height="80px" width="80px">
                                    @else
                                        <h4 class="card-title">No Image Added</h4>
                                    @endif
                                    <input type="file" name="image2" class="dropify" />
                                    <a class="btn btn-success mt-2" id="toggleDiv1">Add Another Image <i class="fa fa-plus-square"></i></a>
                                </div>

                                <div class="form-group" >
                                    <h4 class="card-title">Image-3</h4>
                                    @if (isset($data->image3))
                                        <img src="BatchImage/{{$data->image3}}" alt="" height="80px" width="80px">
                                    @else
                                        <h4 class="card-title">No Image Added</h4>
                                    @endif
                                    <input type="file" name="image3" class="dropify" />
                                    <a class="btn btn-success mt-2" id="toggleDiv2">Add Another Image <i class="fa fa-plus-square"></i></a>
                                </div>
                                <div class="form-group" >
                                    <h4 class="card-title">Image-4</h4>
                                    @if (isset($data->image4))
                                        <img src="BatchImage/{{$data->image4}}" alt="" height="80px" width="80px">
                                    @else
                                        <h4 class="card-title">No Image Added</h4>
                                    @endif
                                    <input type="file" name="image4" class="dropify" />
                                </div>

                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-success btn-sm w-100">
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
    <script>
        // Get a reference to the <div> and the button
        const myDiv = document.getElementById('myDiv');
        const toggleButton = document.getElementById('toggleDiv');

        const myDiv1 = document.getElementById('myDiv1');
        const toggleButton1 = document.getElementById('toggleDiv1');

        const myDiv2 = document.getElementById('myDiv2');
        const toggleButton2 = document.getElementById('toggleDiv2');

        // Function to toggle the visibility of the <div>
        function toggleDiv() {
            if (myDiv.style.display === 'none') {
                myDiv.style.display = 'block';
            } else {
                myDiv.style.display = 'none';
            }
        }
        function toggleDiv1() {
            if (myDiv1.style.display === 'none') {
                myDiv1.style.display = 'block';
            } else {
                myDiv1.style.display = 'none';
            }
        }
        function toggleDiv2() {
            if (myDiv2.style.display === 'none') {
                myDiv2.style.display = 'block';
            } else {
                myDiv2.style.display = 'none';
            }
        }

        // Add a click event listener to the button
        toggleButton.addEventListener('click', toggleDiv);
        toggleButton1.addEventListener('click', toggleDiv1);
        toggleButton2.addEventListener('click', toggleDiv2);

    </script>
    <!-- Custom js for this page-->
    <script src="admin/js/dropify.js"></script>
    <!-- End custom js for this page-->
    <!-- plugin js for this page -->
    <script src="admin/vendors/tinymce/tinymce.min.js"></script>
    <script src="admin/vendors/tinymce/themes/modern/theme.js"></script>
    <script src="admin/vendors/summernote/dist/summernote-bs4.min.js"></script>
    <!-- plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="admin/js/editorDemo.js"></script>
    <!-- End custom js for this page-->
@endsection