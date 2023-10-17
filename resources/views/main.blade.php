<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="EduLight - Multipurpose Education Template">
    <meta name="keywords" content="edulight, bootstrap, education template, template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edulight - @yield('title')</title>

    @include('user.include.style')
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<!--==================
    Header
===================-->
@include('user.include.header')
@yield('body')
<!--==================
    Footer
===================-->
@include('user.include.footer')

<!--==================
    JS Files
===================-->
@include('user.include.script')
{{--<div class="demo-style-switch" id="switch-style">--}}
    {{--<a id="toggle-switcher" class="switch-button" title="Change Styles"><span class="fa fa-cog fa-spin"></span></a>--}}
    {{--<div class="switched-options">--}}
        {{--<div class="config-title">--}}
            {{--<h3>Edulight</h3>--}}
            {{--<p>Multipurpose Education Template</p>--}}
            {{--<a href="#" class="buy--btn">Purchase Now</a>--}}
        {{--</div>--}}
        {{--<div class="demos">--}}
            {{--<div><a href="01-main-demo.html"><img class="main-image img-responsive" src="demo/main-demo.jpg" alt=""/></a></div>--}}
            {{--<ul class="list-unstyled clearfix">--}}
                {{--<li><a href="02-edulight-default-one.html"><img src="demo/default1.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="03-edulight-default-two.html"><img src="demo/default2.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="04-course-hub-v1.html"><img src="demo/course-hub1.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="05-course-hub-v2.html"><img src="user/demo/course-hub2.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="06-kindergarten-v1.html"><img src="user/demo/ks1.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="07-kindergarten-v2.html"><img src="user/demo/ks2.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="08-university-v1.html"><img src="user/demo/university1.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="09-university-v2.html"><img src="user/demo/university2.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="10-single-instructor.html"><img src="user/demo/single-instructor.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="11-dance-school.html"><img src="user/demo/dance-school.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="12-driving-school.html"><img src="user/demo/driving-school.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="13-online-school.html"><img src="user/demo/online-school.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="14-language-club.html"><img src="user/demo/lang-club.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="15-single-course.html"><img src="user/demo/single-course.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><a href="coming-soon.html"><img src="user/demo/coming-soon.jpg" alt="" class="img-responsive"></a></li>--}}
                {{--<li><img src="user/demo/cs.jpg" class="img-responsive" alt=""></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
</body>

</html>
