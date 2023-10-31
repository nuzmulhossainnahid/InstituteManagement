<header>
    <!-- Header Top -->
    <div class="header-top header-top-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 header-top-left">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i> Seventh Avenue New York</li>
                        <li><i class="fa fa-phone"></i> +123 456 789</li>
                        <li><i class="fa fa-envelope"></i> hello@edulight.com</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12 header-top-right">
                    <ul class="list-unstyled">
                        @guest
                        <li><a href="{{url('registration')}}">Register</a></li>
                        <li><a href="{{url('login')}}">Login</a></li><li><a href="#" class="apply-btn">Apply Now</a></li>
                        @endguest

                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Ends: .header-top -->
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <!-- Main Menu -->
                <div class="col-sm-12">
                    <nav class="navbar" id="main-nav">
                        <div class="containers">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#edulight-navbar-collapse" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Change Logo Here -->
                                <a class="navbar-brand" href="/"><img src="user/images/logo.png" alt="EduLight"></a>
                            </div><!-- End .navbar-header -->

                            <!-- Fullscreen search -->
                            <div class="search-wrap">
                                <div class="search-inner">
                                    <div class="search-cell">
                                        <form method="get">
                                            <div class="search-field-holder">
                                                <input type="search" class="form-control main-search-input" placeholder="Search ...">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end fullscreen search -->

                            <div class="nav-container">
                                <div class="menu-search">
                                    <ul class="list-unstyled">
                                        <li class="hidden-xs">
                                            <ul class="list-unstyled">
                                                <li class="nav-search-wrap hidden-xs">
                                                    <a href="#" class="nav-search search-trigger">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li><!-- Ends .nav-right -->
                                    </ul>
                                </div>
                                <div class="collapse navbar-collapse" id="edulight-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="mega-menu"><a href="/" class="dropdown-toggle">Home</a>
                                        </li><!-- End .mega-menu -->
                                        <li class="mega-menu"><a href="{{url('allCourse')}}" class="dropdown-toggle">Courses</a></li><!-- End .mega-menu -->
                                        <li class="dropdown">
                                            <a href="#">Teacher</a>
                                        </li><!-- End Teacher -->
                                        <li class="dropdown">
                                            <a href="#">Events</a>
                                        </li><!-- End Pages -->

                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                        </li> <!-- end gallery -->

                                        <li class="dropdown">
                                            <a href="#" >Contact</a>
                                        </li><!-- End Contact -->
                                        <li><a href="shop.html">Shop</a></li>
                                        @auth
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="">Account Details</a></li>
                                                <li><a href="">Result</a></li>
                                                <li><a href="">Class Attendance</a></li>
                                                <li><a href="">Education Materials</a></li>
                                                <li><a href="">Edit Profile</a></li>
                                                <li><a href="{{url('logout')}}">Logout</a></li>
                                            </ul>
                                        </li><!-- End Account -->
                                            @endauth
                                    </ul>
                                </div><!-- .navbar-collapse -->
                            </div><!-- Ends: .nav-container -->

                        </div><!-- .container -->
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- Ends: .main-menu -->
</header><!-- ends: Header -->
