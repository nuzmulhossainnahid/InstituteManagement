@extends('admin.main')
@section('title')
    Dashboard
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
                    Data table
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('adminDashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Batch</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Batch</h4>
                    <a href="{{url('addNewBatchForm')}}" class="btn btn-success m-2 w-100">Add New Batch</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Batch #</th>
                                        <th>Image</th>
                                        <th>Batch Name</th>
                                        <th>Teacher Name</th>
                                        <th>Teacher Image</th>
                                        <th>Price</th>
                                        <th>Starting Date-Time</th>
                                        <th>Student</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($data as $data)
                                        <tr>
                                        <td>{{$number}}</td>
                                            <?php $number++; ?>
                                        <td><img src="BatchImage/{{$data->image1}}" height="60px" width="80px" alt=""></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->teacherName}}</td>
                                        <td><img src="TeacherImage/{{$data->teacherImage}}" height="60px" width="80px" alt=""></td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->date}} - {{$data->time}}</td>
                                        <td>
                                            <label class="badge badge-info">{{$data->student}}</label>
                                        </td>
                                        <td>
                                            <a href="{{url('')}}" class="btn btn-outline-success w-100">View</a>
                                            <a href="{{url('editBatch',$data->id)}}" class="btn btn-outline-primary w-100 mt-1">Edit</a>
                                            <a href="{{url('deleteBatch',$data->id)}}" class="btn btn-outline-danger w-100 mt-1">Delete</a>
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

