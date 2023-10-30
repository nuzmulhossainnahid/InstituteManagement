<section class="teachers-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header04 section-header-d">
                <h2>Our <span>Teachers</span></h2>
                <p>Lorem ipsum dolor sity ametr consectetuer adipiscingi eliyt sed diam</p>
                <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
            </div><!-- ends: .section-header -->
        </div>
    </div>
    <div class="container-custom">
        <div class="row">
            <div class="col-sm-12 teacher-main-carousel">
                <div class="teacher-single-column">
                    @foreach($teacher as $teacher)
                    <div class="col-sm-6">
                        <div class="teacher-single05">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 ts5-image">
                                    <figure>
                                        <img src="TeacherImage/{{$teacher->image}}" alt="" class="img-responsive">
                                        <figcaption>
                                            <ul class="list-unstyled">
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-12 ts5-info">
                                    <h3>{{$teacher->name}}</h3>
                                    <span>{{$teacher->department}}</span>
                                    <p>{!! $teacher->description !!}</p>
                                    <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Ends: .col-sm-6 -->

                    @endforeach
                </div><!-- Ends: .teacher-single-column -->

            </div><!-- Ends: .teacher-main-carousel -->
        </div>
    </div>
</section><!-- Ends: .kids-teacher -->