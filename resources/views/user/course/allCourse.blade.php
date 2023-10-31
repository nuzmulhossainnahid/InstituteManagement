@extends('main')
@section('title')
   All Course
@endsection
@section('body')
    <!--============================
		Course Page Header
	=============================-->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>All Courses</h1>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li class="active">Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Ends: .page-header -->

    <!--============================
        Course Page Content
    =============================-->
    <section class="all-course-wrapper online-course-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="course-container">
                        <div class="row">

                            @foreach($data as $data)
                            <div class="col-md-4 col-sm-6">
                                <div class="online-course-single">
                                    <figure>
                                        <img src="BatchImage/{{$data->image1}}" alt="" width="370px" height="250px" class="img-responsive">
                                        <figcaption>
                                            <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="online-course-details">
                                        <p class="price-tag"><span>Price:</span> <span>{{$data->price}}</span></p>
                                        <h3>{{$data->name}}</h3>
                                        <ul class="list-unstyled teacher-info">
                                            <li><img src="TeacherImage/{{$data->teacherImage}}" height="50px" width="50px" alt="" class="img-responsove img-circle"></li>
                                            <li>{{$data->teacherName}}</li>
                                        </ul>
                                        <div class="course-excerpt">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <span>Starting Date</span>
                                                    <span>{{$data->date}}</span>
                                                </div>
                                                <div class="col-sm-4">
                                                    <span>Total Student</span>
                                                    <span>{{$data->student}}</span>
                                                </div>
                                                <div class="col-sm-4">
                                                    <span>Duration</span>
                                                    <span>{{$data->time}}</span>
                                                </div>
                                            </div>
                                        </div><!-- Ends: .course-excerpt -->
                                        <div class="course-excerpt-bottom">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-comment"></i> 09</li>
                                                <li><i class="fa fa-heart"></i> 80</li>
                                                <li>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- Ends: .course-excerpt-bottom -->
                                        <div class="course-details-btn">
                                            <a href="{{url('courseView',$data->id)}}">View Details</a>
                                        </div><!-- Ends: .course-details-btn -->

                                    </div><!-- Ends: .online-course-details -->
                                </div><!-- Ends: .online-course-single -->
                            </div><!-- Ends: .col-sm-4 -->
                            @endforeach
                        </div>
                    </div><!-- Ends: .course-container -->
                </div><!-- Ends: .col-md-12 -->

            </div>
        </div>
    </section>

@endsection
