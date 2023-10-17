@extends('admin.main')
@section('title')
    Batch Category
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
                    All Batch Category
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('addNewBatchForm')}}">Add New Batch</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Batch Category</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{url('addNewBatchCategoryForm')}}" class="btn btn-success m-2 w-100">Add New Batch Category</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Batch #</th>
                                        <th>Batch Category Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($data as $data)                                    <tr>
                                        <td>{{$number}}</td>
                                        <?php $number++; ?>
                                        <td>
                                            <label class="badge badge-info">{{$data->batch_category}}</label>
                                        </td>
                                        <td>
                                            <a href="{{url('deleteBatchCategory',$data->id)}}" class="btn btn-outline-danger w-100">Delete</a>
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

