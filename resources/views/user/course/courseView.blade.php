@extends('main')
@section('title')
    {{$data->name}}
@endsection
@section('body')
    <!--==========================
		Single Course Header
	===========================-->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Single Course Details</h1>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li class="active">Course Title</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Ends: .page-header -->

    <!--==========================
        Single Course Content
    ===========================-->
    <section class="single-course-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="single-course-content">
                        <h3 class="course-title">{{$data->name}}</h3>
                        <div class="course-meta row">
                            <div class="col-sm-5 course-duration">
                                <div class="course-icon"><img src="BatchImage/{{$data->image1}}" alt=""></div>
                                <div class="duration-details">
                                    <span>{{$data->time}}</span>
                                    <span>{{$data->date}}</span>
                                </div>
                            </div>
                            <div class="col-sm-4 course-reviews">
                                <span>Review</span>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li>(8 Reviews)</li>
                                </ul>
                            </div>
                            <div class="col-sm-3 course-cat">
                                <span>Categories</span>
                                <span><a href="#">{{$data->category}}</a></span>
                            </div>
                        </div><!-- Ends: .course-meta -->
                        <div class="course-gallery">
                            <div id="sync1" class="owl-carousel">
                                @if(isset($data->image1))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image1}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                @if(isset($data->image2))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image2}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                                @if(isset($data->image3))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image3}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                                @if(isset($data->image4))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image4}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                                @if(isset($data->image1))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image1}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                                @if(isset($data->image2))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image2}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                                @if(isset($data->image3))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image3}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                                @if(isset($data->image4))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image4}}" alt="" class="img-responsive">
                                </div>
                                    @endif
                            </div>

                            <div id="sync2" class="owl-carousel">
                                <div class="item">
                                    <img src="BatchImage/{{$data->image1}}" alt="" class="img-responsive">
                                </div>
                                @if(isset($data->image2))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image2}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                @if(isset($data->image3))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image3}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                @if(isset($data->image4))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image4}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                @if(isset($data->image1))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image1}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                @if(isset($data->image2))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image2}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                @if(isset($data->image3))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image3}}" alt="" class="img-responsive">
                                </div>
                                @endif
                                 @if(isset($data->image4))
                                <div class="item">
                                    <img src="BatchImage/{{$data->image4}}" alt="" class="img-responsive">
                                </div>
                                @endif
                            </div>
                        </div><!-- Ends: .course-gallery -->

                        <div class="course-info-tabs">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabe1" aria-controls="tabe1" role="tab" data-toggle="tab">Description</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Curriculum</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Instructor</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Reviews</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active fade in" id="tabe1">
                                        {!! $data->description !!}
                                    </div><!-- Ends: .tab-pane -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        {!! $data->curriculum !!}
                                    </div><!-- Ends: .tab-pane -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <figure>
                                                    <img src="TeacherImage/{{$teacher->image}}" alt="" class="img-responsive">
                                                    <figcaption>
                                                        <h4>{{$teacher->name}}</h4>
                                                        <span> {{$teacher->qualification}}</span>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div><!-- Ends: .tab-pane -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <h4>Reviews</h4>
                                        <div class="reviews">
                                            <div class="single-review">
                                                <div class="author-image">
                                                    <img src="http://placehold.it/80x80" alt="">
                                                </div>
                                                <div class="author-rating-content">
                                                    <h5>John Doe</h5>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="rating-subject">Beautiful Theme & Best for Education</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aspernatur nihil dolorem fugiat obcaecati quia nisi ex cum accusamus pariatur.</p>
                                                </div>
                                            </div><!-- Ends: .single-review -->
                                            <div class="single-review">
                                                <div class="author-image">
                                                    <img src="http://placehold.it/80x80" alt="">
                                                </div>
                                                <div class="author-rating-content">
                                                    <h5>John Doe</h5>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="rating-subject">Beautiful Theme & Best for Education</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aspernatur nihil dolorem fugiat obcaecati quia nisi ex cum accusamus pariatur.</p>
                                                </div>
                                            </div><!-- Ends: .single-review -->
                                            <div class="single-review">
                                                <div class="author-image">
                                                    <img src="http://placehold.it/80x80" alt="">
                                                </div>
                                                <div class="author-rating-content">
                                                    <h5>John Doe</h5>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="rating-subject">Beautiful Theme & Best for Education</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aspernatur nihil dolorem fugiat obcaecati quia nisi ex cum accusamus pariatur.</p>
                                                </div>
                                            </div><!-- Ends: .single-review -->
                                        </div><!-- Ends: .reviews -->
                                    </div><!-- Ends: .tab-pane -->
                                </div>
                            </div>

                        </div><!-- Ends: .course-info-tabs -->

                        <div class="course-bottom-content">
                            {{--<div class="course-tags">--}}
                                {{--<h4>Tags:</h4>--}}
                                {{--<ul class="list-unstyled">--}}
                                    {{--<li><a href="#">Wordpress</a></li>--}}
                                    {{--<li><a href="#">Campus</a></li>--}}
                                    {{--<li><a href="#">Class</a></li>--}}
                                    {{--<li><a href="#">Courses</a></li>--}}
                                    {{--<li><a href="#">Loop</a></li>--}}
                                    {{--<li><a href="#">Student</a></li>--}}
                                    {{--<li><a href="#">University</a></li>--}}
                                {{--</ul>--}}
                            {{--</div><!-- Ends: .course-tags -->--}}

                            <div class="course-share">
                                <h4>Share:</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Ends: .course-share -->

                            <div class="related-course">
                                <div class="section-header04 section-header-d">
                                    <h2>Related <span>Courses</span></h2>
                                    <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                                </div><!-- ends: .section-header -->
                                <div class="related-course-slide owl-carousel">
                                    @foreach($relatedCourse as $relatedCourse)
                                    <div class="online-course-single">
                                        <figure>
                                            <img src="BatchImage/{{$relatedCourse->image1}}"  alt="" >
                                            <figcaption>
                                                <ul class="list-unstyled">
                                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="online-course-details">
                                            <p class="price-tag"><span>Price:</span> <span>{{$relatedCourse->price}}</span></p>
                                            <h3>{{$relatedCourse->name}}</h3>
                                            <ul class="list-unstyled teacher-info">
                                                <li><img src="TeacherImage/{{$relatedCourse->teacherImage}}" alt="" width="80px" height="80px" class="img-responsove img-circle"></li>
                                                <li>{{$relatedCourse->teacherName}}</li>
                                            </ul>
                                            <div class="course-excerpt">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <span>Starting Date</span>
                                                        <span>{{$relatedCourse->date}}</span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <span>Total Student</span>
                                                        <span>{{$relatedCourse->student}}</span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <span>Duration</span>
                                                        <span>{{$relatedCourse->time}}</span>
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
                                                <a href="{{url('courseView',$relatedCourse->id)}}">View Details</a>
                                            </div><!-- Ends: .course-details-btn -->
                                        </div><!-- Ends: .online-course-details -->
                                    </div><!-- Ends: .online-course-single -->
                                   @endforeach
                                    </div>
                            </div><!-- Ends: .related-course -->
                        </div><!-- Ends: .course-bottom-content -->

                    </div><!-- Ends: .single-course-content -->
                </div><!-- Ends: .col-sm-8 -->

                <div class="col-md-4 col-sm-12">
                    <div class="single-course-sidebar">
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Course Features</h3>
                            <div class="widget-content course-features">
                                {!! $data->feature !!}
                                <div><a href="#" class="course-btn">Take This Course</a></div>
                            </div>
                        </div><!-- Ends: .sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Course Instructor</h3>
                            <div class="widget-content">
                                <figure>
                                    <img src="TeacherImage/{{$teacher->image}}" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4><a href="#">{{$teacher->name}}</a></h4>
                                        <span>{{$teacher->qualification}}</span>
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                        </div><!-- Ends: .sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">All Courses</h3>
                            <div class="widget-content course-category-widget">
                                <ul class="list-unstyled">
                                        @foreach($category as $category)
                                    <li>
                                        <span>{{$category->batch_category}}</span>
                                        <span>(12)</span>
                                    </li>
                                            @endforeach

                                </ul>
                            </div>
                        </div><!-- Ends: .sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Other Courses</h3>
                            <div class="widget-content courses-widget">

                                @foreach($otherCourse as $otherCourse)
                                <div class="sidebar-course-single">
                                    <div class="course-image">
                                        <img src="BatchImage/{{$otherCourse->image1}}" alt="">
                                    </div>
                                    <div class="course-prefix">
                                        <h4><a href="{{url('courseView',$otherCourse->id)}}">{{$otherCourse->name}}</a></h4>
                                        <ul class="list-unstyled">
                                            <li><a href="{{url('courseView',$otherCourse->id)}}">{{$otherCourse->price}}</a></li>
                                            <li>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .sidebar-course-single -->
                                @endforeach
                            </div>
                        </div><!-- Ends: .sidebar-widget -->
                    </div><!-- Ends: .single-course-sidebar -->
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .single-course-wrapper -->


@endsection
