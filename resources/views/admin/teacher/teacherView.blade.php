@extends('admin.main')
@section('title')
    Teacher
@endsection
@section('body')
    <div class="main-panel">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Teacher
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('adminDashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Teacher</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Batch</h4>
                    <a href="{{url('addNewTeacherForm')}}" class="btn btn-success m-2 w-100">Add New Teacher</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>SL #</th>
                                        <th>Image</th>
                                        <th>Teacher Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($data as $data)                                    <tr>
                                    <tr>
                                        <td>{{$number}}</td>
                                        <?php $number++; ?>
                                        <td><img src="TeacherImage/{{$data->image}}" height="60px" width="80px" alt=""></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->description}}</td>

                                        <td>
                                            <a href="{{url('detailsTeacher',$data->id)}}" class="btn btn-outline-primary m-1">Details</a>
                                            <a href="{{url('editTeacherFrom',$data->id)}}" class="btn btn-outline-primary m-1">Edit</a>
                                            <a href="{{url('deleteTeacherFrom',$data->id)}}" class="btn btn-outline-primary m-1" onclick="return confirm('Are you sure?')">Delete</a>
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
        </div>
        <!-- content-wrapper ends -->

    </div>
@endsection

@section('script')

    @endsection

