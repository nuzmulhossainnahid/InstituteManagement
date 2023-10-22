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
                                    <tr>
                                        <td>1</td>
                                        <td>2012/08/03</td>
                                        <td>2012/08/03</td>
                                        <td>Edinburgh</td>
                                        <td>New York</td>
                                        <td>$1500</td>
                                        <td>$3200</td>
                                        <td>
                                            <label class="badge badge-info">On hold</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
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

