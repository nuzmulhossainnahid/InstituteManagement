<section class="courses-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header04 section-header-d">
                <h2>Our <span>Courses</span></h2>
                <p>Lorem ipsum dolor sity ametr consectetuer adipiscingi eliyt sed diam</p>
                <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
            </div><!-- ends: .section-header -->
        </div>
    </div>
    <div class="container-custom">
        <div class="row">
            <div class="col-sm-12 course-carousel-main owl-carousel">
                @foreach($batch as $batch)
                <div class="online-course-single">
                    <figure>
                        <img src="BatchImage/{{$batch->image1}}" alt="" class="img-responsive">
                        <figcaption>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="online-course-details">
                        <p class="price-tag"><span>Price:</span> <span>{{$batch->price}}</span></p>
                        <h3>{{$batch->name}}</h3>
                        <ul class="list-unstyled teacher-info">
                            <li><img src="TeacherImage/{{$batch->teacherImage}}" alt="" class="img-responsove img-circle" width="50px" height="50px"></li>
                            <li>{{$batch->teacherName}}</li>
                        </ul>
                        <div class="course-excerpt">
                            <div class="row">
                                <div class="col-sm-4">
                                    <span>Course Time</span>
                                    <span>{{$batch->date}}</span>
                                </div>
                                <div class="col-sm-4">
                                    <span>Total Student</span>
                                    <span>{{$batch->student}}</span>
                                </div>
                                <div class="col-sm-4">
                                    <span>Duration</span>
                                    <span>{{$batch->time}}</span>
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
                            <a href="{{url('courseView',$batch->id)}}">View Details</a>
                        </div><!-- Ends: .course-details-btn -->
                    </div><!-- Ends: .online-course-details -->
                </div><!-- Ends: .online-course-single -->
                @endforeach
            </div><!-- Ends: .course-carousel-main -->
        </div>
    </div>
</section><!-- Ends: .course-main -->