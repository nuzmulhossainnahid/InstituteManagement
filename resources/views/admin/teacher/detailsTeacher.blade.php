@extends('admin.main')
@section('title')
    Teacher
@endsection
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Profile
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('teacherView')}}">Teacher</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="border-bottom text-center pb-4">
                                        <img src="TeacherImage/{{$data->image}}" alt="profile" class="img-lg rounded-circle mb-3"/>
                                        <p>{{$data->regNo}}</p>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-success">Hire Me</button>
                                            <button class="btn btn-success">Follow</button>
                                        </div>
                                    </div>
                                    <div class="py-4">
                                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                                            <span class="float-right text-muted">
                            Active
                          </span>
                                        </p>
                                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                                            <span class="float-right text-muted">
                           {{$data->phone}}
                          </span>
                                        </p>
                                        <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                                            <span class="float-right text-muted">
                            {{$data->email}}
                          </span>
                                        </p>
                                        <p class="clearfix">
                                        </p>
                                    </div>
                                    <button class="btn btn-primary btn-block">Preview</button>
                                </div>
                                <div class="col-lg-8 pl-lg-5">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3>{{$data->name}}</h3>
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0 mr-2 text-muted">Rating</h5>
                                                <select id="profile-rating" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-secondary btn-icon">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-primary">Call</button>
                                        </div>
                                    </div>

                                    <div class="profile-feed">
                                        <div class="d-flex align-items-start profile-feed-item">
                                            <div class="ml-4">
                                                    {{$data->description}}
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
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
@endsection

@section('script')
    <!-- Custom js for this page-->
    <script src="admin/js/profile-demo.js"></script>
    <!-- End custom js for this page-->
@endsection

