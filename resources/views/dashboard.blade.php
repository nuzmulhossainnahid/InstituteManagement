@extends('main')
@section('title')
    Dashboard
@endsection
@section('body')
    <!--==================
    Slider
===================-->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <section class="slider slider-university">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider" style="display:none">

                <!-- BEGIN SLIDES LIST -->
                <ul>
                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/slide01-thumb.jpg">
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="user/images/slide06.jpg" alt="Sky" class="rev-slidebg">
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                             data-x="['left', 'center', 'center', 'center']" data-hoffset="0"
                             data-y="center" data-voffset="-70"
                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">Take The First Step
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="10"
                             data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">To Knowledge With Us
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-lora sfb tp-resizeme letter-space-5"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="-160"
                             data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; font-size:20px; color:#fff; font-family:'Roboto', serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement of Knowledge
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="120"
                             data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">View Courses</a> <a href="#." class="el-btn-regular">Purchase Now</a>
                        </div>
                    </li>
                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/slide02-thumb.jpg">
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="user/images/slide03.jpg" alt="Sky" class="rev-slidebg">
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="-70"
                             data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">Take The First Step
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="10"
                             data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">To Knowledge With Us
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-lora sfb tp-resizeme letter-space-5"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="-160"
                             data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; font-size:20px; color:#fff; font-family:'Roboto', serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement of Knowledge
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme"
                             data-x="left" data-hoffset="0"
                             data-y="center" data-voffset="120"
                             data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">View Courses</a> <a href="#." class="el-btn-regular">Purchase Now</a>
                        </div>
                    </li>
                </ul><!-- END SLIDES LIST -->

            </div><!-- END SLIDER CONTAINER -->
        </div><!-- END SLIDER CONTAINER WRAPPER -->
    </section>
    <section class="slider-bottom-services">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="user/images/icon01.png" alt="" />
                        </div>
                        <div class="service-info">
                            <h3>Skilled Teachers</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-sm-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="user/images/icon02.png" alt=""/>
                        </div>
                        <div class="service-info">
                            <h3>Diploma Course</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-sm-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="user/images/icon03.png" alt="" />
                        </div>
                        <div class="service-info">
                            <h3>Learn Anywhere</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-sm-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="user/images/icon04.png" alt="" />
                        </div>
                        <div class="service-info">
                            <h3>Books Library</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
            </div>
        </div>
    </section><!-- Ends: .slider-bottom-services -->

    <!--==================
        Courses
    ===================-->
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
                    <div class="online-course-single">
                        <figure>
                            <img src="user/images/online-course/c01.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="online-course-details">
                            <p class="price-tag"><span>Price:</span> <span>$150</span></p>
                            <h3>Marketing Management</h3>
                            <ul class="list-unstyled teacher-info">
                                <li><img src="user/images/online-course/course-author.jpg" alt="" class="img-responsove img-circle"></li>
                                <li>Micahel Smith</li>
                            </ul>
                            <div class="course-excerpt">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span>Course Time</span>
                                        <span>1 Year</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Total Student</span>
                                        <span>35</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Duration</span>
                                        <span>7:00 - 11:00</span>
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
                                <a href="#">View Details</a>
                            </div><!-- Ends: .course-details-btn -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="user/images/online-course/c02.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="online-course-details">
                            <p class="price-tag"><span>Price:</span> <span>$150</span></p>
                            <h3>Research & Development</h3>
                            <ul class="list-unstyled teacher-info">
                                <li><img src="user/images/online-course/course-author.jpg" alt="" class="img-responsove img-circle"></li>
                                <li>Micahel Smith</li>
                            </ul>
                            <div class="course-excerpt">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span>Course Time</span>
                                        <span>1 Year</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Total Student</span>
                                        <span>35</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Duration</span>
                                        <span>7:00 - 11:00</span>
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
                                <a href="#">View Details</a>
                            </div><!-- Ends: .course-details-btn -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="user/images/online-course/c03.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="online-course-details">
                            <p class="price-tag"><span>Price:</span> <span>$150</span></p>
                            <h3>Accounting & Finance</h3>
                            <ul class="list-unstyled teacher-info">
                                <li><img src="user/images/online-course/course-author.jpg" alt="" class="img-responsove img-circle"></li>
                                <li>Micahel Smith</li>
                            </ul>
                            <div class="course-excerpt">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span>Course Time</span>
                                        <span>1 Year</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Total Student</span>
                                        <span>35</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Duration</span>
                                        <span>7:00 - 11:00</span>
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
                                <a href="#">View Details</a>
                            </div><!-- Ends: .course-details-btn -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="user/images/online-course/c04.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="online-course-details">
                            <p class="price-tag"><span>Price:</span> <span>$150</span></p>
                            <h3>Agriculture & Forestry</h3>
                            <ul class="list-unstyled teacher-info">
                                <li><img src="user/images/online-course/course-author.jpg" alt="" class="img-responsove img-circle"></li>
                                <li>Micahel Smith</li>
                            </ul>
                            <div class="course-excerpt">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span>Course Time</span>
                                        <span>1 Year</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Total Student</span>
                                        <span>35</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Duration</span>
                                        <span>7:00 - 11:00</span>
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
                                <a href="#">View Details</a>
                            </div><!-- Ends: .course-details-btn -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="user/images/online-course/c05.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="online-course-details">
                            <p class="price-tag"><span>Price:</span> <span>$150</span></p>
                            <h3>American Studies</h3>
                            <ul class="list-unstyled teacher-info">
                                <li><img src="user/images/online-course/course-author.jpg" alt="" class="img-responsove img-circle"></li>
                                <li>Micahel Smith</li>
                            </ul>
                            <div class="course-excerpt">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span>Course Time</span>
                                        <span>1 Year</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Total Student</span>
                                        <span>35</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Duration</span>
                                        <span>7:00 - 11:00</span>
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
                                <a href="#">View Details</a>
                            </div><!-- Ends: .course-details-btn -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->
                    <div class="online-course-single">
                        <figure>
                            <img src="user/images/online-course/c06.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-paper-plane-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="online-course-details">
                            <p class="price-tag"><span>Price:</span> <span>$150</span></p>
                            <h3>Anatomy & Physiology</h3>
                            <ul class="list-unstyled teacher-info">
                                <li><img src="user/images/online-course/course-author.jpg" alt="" class="img-responsove img-circle"></li>
                                <li>Micahel Smith</li>
                            </ul>
                            <div class="course-excerpt">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span>Course Time</span>
                                        <span>1 Year</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Total Student</span>
                                        <span>35</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span>Duration</span>
                                        <span>7:00 - 11:00</span>
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
                                <a href="#">View Details</a>
                            </div><!-- Ends: .course-details-btn -->
                        </div><!-- Ends: .online-course-details -->
                    </div><!-- Ends: .online-course-single -->

                </div><!-- Ends: .course-carousel-main -->
            </div>
        </div>
    </section><!-- Ends: .course-main -->

    <!-- ==========================
        Counters & Call To Action
    ============================ -->
    <section class="counter-cta counter-cta08 cta12">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 counters">
                    <div class="row">
                        <div class="col-sm-6 counters-block">
                            <span>5000+</span>
                            <span>Learners</span>
                        </div>
                        <div class="col-sm-6 counters-block">
                            <span>4000+</span>
                            <span>Graduates</span>
                        </div>
                        <div class="col-sm-6 counters-block">
                            <span>110+</span>
                            <span>Countries Reached</span>
                        </div>
                        <div class="col-sm-6 counters-block">
                            <span>940+</span>
                            <span>Courses Published</span>
                        </div>
                    </div>
                </div><!-- Ends: .counters -->
                <div class="col-md-6 col-sm-6">
                    <div class="cta-from">
                        <form action="#">
                            <h3>Register Now</h3>
                            <div class="form-group">
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <textarea placeholder="Message"></textarea>
                                <div>
                                    <button type="submit" class="el-btn-medium">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- Ends: .cta-form -->
                </div>
            </div>
        </div>
    </section><!-- Ends: .counter-cta -->

    <!--==================
        Our Events
    ===================-->
    <section class="events events-style02">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header04 section-header-d">
                    <h2>Our <span>Events</span></h2>
                    <p>Lorem ipsum dolor sity ametr consectetuer adipiscingi eliyt sed diam</p>
                    <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                </div><!-- ends: .section-header -->

                <div class="col-sm-12 events-block events-carousel">
                    <div class="row">
                        <a href="#" class="view-all-btn">View All</a>
                        <div class="col-sm-12">
                            <div class="event2-single">
                                <div class="row">
                                    <div class="col-sm-2 event-date">
                                        <span>10th</span>
                                        <span>January, 2017</span>
                                    </div>
                                    <div class="col-sm-3 event-thumb">
                                        <img src="user/images/event/event01.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7 event-info">
                                        <h3>Happy New Year 2017</h3>
                                        <p class="event-td">
                                            <span><i class="fa fa-clock-o"></i> 8:00am - 5:00pm</span>
                                            <span><i class="fa fa-map-marker"></i> Newyork</span>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam.</p>
                                        <a href="#" class="erm-btn">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .event2-single -->
                        <div class="col-sm-12">
                            <div class="event2-single">
                                <div class="row">
                                    <div class="col-sm-2 event-date">
                                        <span>20th</span>
                                        <span>January, 2017</span>
                                    </div>
                                    <div class="col-sm-3 event-thumb">
                                        <img src="user/images/event/event02.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7 event-info">
                                        <h3>Happy New Year 2017</h3>
                                        <p class="event-td">
                                            <span><i class="fa fa-clock-o"></i> 8:00am - 5:00pm</span>
                                            <span><i class="fa fa-map-marker"></i> Newyork</span>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam.</p>
                                        <a href="#" class="erm-btn">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .event2-single -->
                        <div class="col-sm-12">
                            <div class="event2-single">
                                <div class="row">
                                    <div class="col-sm-2 event-date">
                                        <span>25th</span>
                                        <span>January, 2017</span>
                                    </div>
                                    <div class="col-sm-3 event-thumb">
                                        <img src="user/images/event/event03.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7 event-info">
                                        <h3>Happy New Year 2017</h3>
                                        <p class="event-td">
                                            <span><i class="fa fa-clock-o"></i> 8:00am - 5:00pm</span>
                                            <span><i class="fa fa-map-marker"></i> Newyork</span>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam.</p>
                                        <a href="#" class="erm-btn">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .event2-single -->
                    </div>
                </div><!-- ends: .event-block -->
            </div>
        </div>
    </section><!-- ends: .events -->

    <!--==================
        Video
    ===================-->
    <section class="video video-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="vt-box">
                        <div class="vt-text">
                            <h2>Get Started Today</h2>
                            <p>Lorem ipsums dolors sit amet, consectetur adipiselo elit. sed do eiusmod tempor the incididunt ut labore et.</p>
                        </div>
                        <div class="vt-btn">
                            <a href="#">Purchase Theme</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 video-play-btn">
                    <a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" class="video-iframe"><span><i class="fa fa-play"></i></span> <span>Watch Intro Video</span></a>
                </div>
            </div>
        </div>
    </section><!-- ends: .video -->

    <!--==================
        Teachers
    ===================-->
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
                        <div class="col-sm-6">
                            <div class="teacher-single05">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ts5-image">
                                        <figure>
                                            <img src="user/images/kindergarten/teacher01.png" alt="" class="img-responsive">
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
                                        <h3>John Doe</h3>
                                        <span>Finance Teacher</span>
                                        <p>Lorem ipsum dolor sit amet,consec tetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Uwisi enim adi  min veniam.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="teacher-single05">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ts5-image">
                                        <figure>
                                            <img src="user/images/kindergarten/teacher02.png" alt="" class="img-responsive">
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
                                        <h3>Adam Smith</h3>
                                        <span>Language Teacher</span>
                                        <p>Lorem ipsum dolor sit amet,consec tetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Uwisi enim adi  min veniam.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .col-sm-6 -->
                    </div><!-- Ends: .teacher-single-column -->
                    <div class="teacher-single-column">
                        <div class="col-sm-6">
                            <div class="teacher-single05">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ts5-image">
                                        <figure>
                                            <img src="user/images/kindergarten/teacher03.png" alt="" class="img-responsive">
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
                                        <h3>Arona Doe</h3>
                                        <span>Computer Teacher</span>
                                        <p>Lorem ipsum dolor sit amet,consec tetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Uwisi enim adi  min veniam.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="teacher-single05">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ts5-image">
                                        <figure>
                                            <img src="user/images/kindergarten/teacher04.png" alt="" class="img-responsive">
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
                                        <h3>Jonathon Krise</h3>
                                        <span>Math Teacher</span>
                                        <p>Lorem ipsum dolor sit amet,consec tetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Uwisi enim adi  min veniam.</p>
                                        <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ends: .col-sm-6 -->
                    </div><!-- Ends: .teacher-single-column -->
                </div><!-- Ends: .teacher-main-carousel -->
            </div>
        </div>
    </section><!-- Ends: .kids-teacher -->

    <!-- ==========================
        Testimonial
    ============================ -->
    <section class="testimonial02">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-media row">
                        <div class="carousel-images slider-nav col-sm-8 col-sm-offset-2">
                            <div>
                                <img src="user/images/client01.jpg" alt="1" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client02.jpg" alt="2" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client03.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client04.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client05.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client06.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client07.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client01.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                            <div>
                                <img src="user/images/client02.jpg" alt="3" class="img-responsive img-circle">
                            </div>
                        </div>
                    </div><!-- /.block-media -->
                    <div class="block-text row">
                        <div class="carousel-text slider-for col-sm-8 col-sm-offset-2">
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt utrinyi  dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam, quis nostrud exerci tation ullamc orperea commodo consequ utm euismod tincidunt ut laoreet dolore magna.</p>
                                    <h3>Oscar Charls</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, expedita. Ipsa illum explicabo numquam dolorum repellat, ex rerum minus assumenda quasi tempora dolor veritatis, dolorem aperiam cupiditate odio consequuntur dignissimos repudiandae atque, laborum sapiente eos maxime sit. Ab, aut, praesentium.</p>
                                    <h3>Jhon Doe</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptate aperiam repudiandae maiores vero recusandae alias, nesciunt quasi id, inventore enim iste eaque eveniet amet blanditiis corrupti dolores neque tempore odio explicabo pariatur eius illo? Dolorum sint officiis aliquam quisquam.</p>
                                    <h3>James Martin</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt utrinyi  dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam, quis nostrud exerci tation ullamc orperea commodo consequ utm euismod tincidunt ut laoreet dolore magna.</p>
                                    <h3>Jessica Alaba</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloribus qui recusandae asperiores vitae praesentium magni laborum autem repudiandae, odit quis expedita, distinctio voluptatem beatae vero labore quae. Numquam assumenda dignissimos tempora, nisi ducimus qui libero autem sunt saepe accusantium.</p>
                                    <h3>Oscar Tabarez</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt utrinyi  dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam, quis nostrud exerci tation ullamc orperea commodo consequ utm euismod tincidunt ut laoreet dolore magna.</p>
                                    <h3>John Charls</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quo cupiditate, harum nesciunt neque deserunt unde est vitae explicabo ea aut, ab. Dicta, sunt soluta. Voluptatibus ab optio in, odit perferendis maiores, consequuntur culpa consequatur excepturi at, placeat. Facilis, numquam.</p>
                                    <h3>Shane Bond</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt utrinyi  dolore magna aliquam erat volutpat. Ut wisi enimbf adiminim veniam, quis nostrud exerci tation ullamc orperea commodo consequ utm euismod tincidunt ut laoreet dolore magna.</p>
                                    <h3>David Warner</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                            <div>
                                <div class="single-box">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias delectus facilis totam autem aliquam possimus nostrum enim perferendis, dolorum repellendus minima ipsam quae consequuntur ut id ipsum quod, quasi dolor reprehenderit aperiam! Vitae ut dolorum ipsa atque dolores aspernatur voluptates?</p>
                                    <h3>Steven Smith</h3>
                                    <span>Martin, Parent</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.block-text -->
                </div>
            </div>
        </div>
    </section>

    <!--==================
        Blog
    ===================-->
    <section class="blog-main courses08">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header04 section-header-d">
                    <h2>Our <span>Blog</span></h2>
                    <p>Lorem ipsum dolor sity ametr consectetuer adipiscingi eliyt sed diam</p>
                    <span class="section-devider"><span><i class="fa fa-circle"></i></span></span>
                </div><!-- ends: .section-header -->
            </div>
        </div>
        <div class="container-custom">
            <div class="row">
                <div class="col-sm-12 course08-carousel owl-carousel">
                    <div class="carousel-item">
                        <div class="course-single">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="course-info">
                                        <ul class="list-unstyled author-info author-info-main clearfix">
                                            <li><img src="user/images/index08/course-teacher01.jpg" alt="" class="img-circle"> <span>by <a href="#">Michael Smith</a></span></li>
                                            <li>Jan 01</li>
                                        </ul>
                                        <h3><a href="#">Microsoft Excel 2016 Advanced Training</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed do eimod tempor incididunt ut.</p>
                                        <ul class="list-unstyled course-bottom blog-bottom">
                                            <li>45 Comments</li>
                                            <li>150 Likes</li>
                                        </ul>
                                        <ul class="list-unstyled blog-tags">
                                            <li><a href="#">#freebies</a></li>
                                            <li><a href="#">#psd </a></li>
                                            <li><a href="#">#html</a></li>
                                            <li><a href="#">#wordpress</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .course-info -->
                                <div class="col-md-6 col-sm-12 course-image">
                                    <figure>
                                        <img src="user/images/blog-m1.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            <div><a href="#" class="el-btn-regular">Read More</a></div>
                                        </figcaption>
                                    </figure>
                                </div><!-- Ends: .course-image -->
                            </div>
                        </div><!-- Ends: .course-single -->
                        <div class="course-single">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="course-info">
                                        <ul class="list-unstyled author-info author-info-main clearfix">
                                            <li><img src="user/images/index08/course-teacher01.jpg" alt="" class="img-circle"> <span>By <a href="#">Michael Smith</a></span></li>
                                            <li>Jan 01</li>
                                        </ul>
                                        <h3><a href="#">Microsoft Excel 2016 Advanced Training</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed do eimod tempor incididunt ut.</p>
                                        <ul class="list-unstyled course-bottom blog-bottom">
                                            <li>45 Comments</li>
                                            <li>150 Likes</li>
                                        </ul>
                                        <ul class="list-unstyled blog-tags">
                                            <li><a href="#">#freebies</a></li>
                                            <li><a href="#">#psd </a></li>
                                            <li><a href="#">#html</a></li>
                                            <li><a href="#">#wordpress</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .course-info -->
                                <div class="col-md-6 col-sm-12 course-image">
                                    <figure>
                                        <img src="user/images/blog-m2.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            <div><a href="#" class="el-btn-regular">Read More</a></div>
                                        </figcaption>
                                    </figure>
                                </div><!-- Ends: .course-image -->
                            </div>
                        </div><!-- Ends: .course-single -->
                    </div><!-- Ends: .carousel-item -->

                    <div class="carousel-item">
                        <div class="course-single">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="course-info">
                                        <ul class="list-unstyled author-info author-info-main clearfix">
                                            <li><img src="user/images/index08/course-teacher01.jpg" alt="" class="img-circle"> <span>By <a href="#">Michael Smith</a></span></li>
                                            <li>Jan 01</li>
                                        </ul>
                                        <h3><a href="#">Microsoft Excel 2016 Advanced Training</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed do eimod tempor incididunt ut.</p>
                                        <ul class="list-unstyled course-bottom blog-bottom">
                                            <li>45 Comments</li>
                                            <li>150 Likes</li>
                                        </ul>
                                        <ul class="list-unstyled blog-tags">
                                            <li><a href="#">#freebies</a></li>
                                            <li><a href="#">#psd </a></li>
                                            <li><a href="#">#html</a></li>
                                            <li><a href="#">#wordpress</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .course-info -->
                                <div class="col-md-6 col-sm-12 course-image">
                                    <figure>
                                        <img src="user/images/blog-m3.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            <div><a href="#" class="el-btn-regular">Read More</a></div>
                                        </figcaption>
                                    </figure>
                                </div><!-- Ends: .course-image -->
                            </div>
                        </div><!-- Ends: .course-single -->
                        <div class="course-single">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="course-info">
                                        <ul class="list-unstyled author-info author-info-main clearfix">
                                            <li><img src="user/images/index08/course-teacher01.jpg" alt="" class="img-circle"> <span>By <a href="#">Michael Smith</a></span></li>
                                            <li>Jan 01</li>
                                        </ul>
                                        <h3><a href="#">Microsoft Excel 2016 Advanced Training</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed do eimod tempor incididunt ut.</p>
                                        <ul class="list-unstyled course-bottom blog-bottom">
                                            <li>45 Comments</li>
                                            <li>150 Likes</li>
                                        </ul>
                                        <ul class="list-unstyled blog-tags">
                                            <li><a href="#">#freebies</a></li>
                                            <li><a href="#">#psd </a></li>
                                            <li><a href="#">#html</a></li>
                                            <li><a href="#">#wordpress</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .course-info -->
                                <div class="col-md-6 col-sm-12 course-image">
                                    <figure>
                                        <img src="user/images/blog-m4.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            <div><a href="#" class="el-btn-regular">Read More</a></div>
                                        </figcaption>
                                    </figure>
                                </div><!-- Ends: .course-image -->
                            </div>
                        </div><!-- Ends: .course-single -->
                    </div><!-- Ends: .carousel-item -->

                    <div class="carousel-item">
                        <div class="course-single">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="course-info">
                                        <ul class="list-unstyled author-info author-info-main clearfix">
                                            <li><img src="user/images/index08/course-teacher01.jpg" alt="" class="img-circle"> <span>By <a href="#">Michael Smith</a></span></li>
                                            <li>Jan 01</li>
                                        </ul>
                                        <h3><a href="#">Microsoft Excel 2016 Advanced Training</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed do eimod tempor incididunt ut.</p>
                                        <ul class="list-unstyled course-bottom blog-bottom">
                                            <li>45 Comments</li>
                                            <li>150 Likes</li>
                                        </ul>
                                        <ul class="list-unstyled blog-tags">
                                            <li><a href="#">#freebies</a></li>
                                            <li><a href="#">#psd </a></li>
                                            <li><a href="#">#html</a></li>
                                            <li><a href="#">#wordpress</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .course-info -->
                                <div class="col-md-6 col-sm-12 course-image">
                                    <figure>
                                        <img src="user/images/blog-m2.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            <div><a href="#" class="el-btn-regular">Read More</a></div>
                                        </figcaption>
                                    </figure>
                                </div><!-- Ends: .course-image -->
                            </div>
                        </div><!-- Ends: .course-single -->
                        <div class="course-single">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="course-info">
                                        <ul class="list-unstyled author-info author-info-main clearfix">
                                            <li><img src="user/images/index08/course-teacher01.jpg" alt="" class="img-circle"> <span>by <a href="#">Michael Smith</a></span></li>
                                            <li>Jan 01</li>
                                        </ul>
                                        <h3><a href="#">Microsoft Excel 2016 Advanced Training</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed do eimod tempor incididunt ut.</p>
                                        <ul class="list-unstyled course-bottom blog-bottom">
                                            <li>45 Comments</li>
                                            <li>150 Likes</li>
                                        </ul>
                                        <ul class="list-unstyled blog-tags">
                                            <li><a href="#">#freebies</a></li>
                                            <li><a href="#">#psd </a></li>
                                            <li><a href="#">#html</a></li>
                                            <li><a href="#">#wordpress</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Ends: .course-info -->
                                <div class="col-md-6 col-sm-12 course-image">
                                    <figure>
                                        <img src="user/images/blog-m1.jpg" alt="" class="img-responsive">
                                        <figcaption>
                                            <div><a href="#" class="el-btn-regular">Read More</a></div>
                                        </figcaption>
                                    </figure>
                                </div><!-- Ends: .course-image -->
                            </div>
                        </div><!-- Ends: .course-single -->
                    </div><!-- Ends: .carousel-item -->

                </div><!-- Ends: .course08-carousel -->
            </div>
        </div>
    </section><!-- Ends: .courses08 -->
    @endsection