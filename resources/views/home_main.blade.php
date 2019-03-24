@extends('layout.master')
@section('page-title')
    Home - Hajj & Umrah Application processing system.
@endsection
@if (Auth::user()->hasRole('admin'))
    <a href="...">This can only be seen by admins</a>
@endif
@section('page-content')
<div class="slider-area">
    <div class="slider-wrapper owl-carousel">
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Welcome to  <span>Haj/Umrah</span> application processing system</h1>
                                <h2>Our website provides the best travel packages for Haj & Umrah, <br>you can buy the best offered packages here and compare them too !</h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="{{ route('journey_page') }}"><span>Book your trip &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></span><div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Welcome to  <span>Haj/Umrah</span> application processing system</h1>
                                <h2>Our website provides the best travel packages for Haj & Umrah, <br>you can buy the best offered packages here and compare them too !</h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="#"><span>Start New Quote &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></span><div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Welcome to  <span>Haj/Umrah</span> application processing system</h1>
                                <h2>Our website provides the best travel packages for Haj & Umrah, <br>you can buy the best offered packages here and compare them too !</h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="#"><span>Start New Quote &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></span><div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h4>About Us</h4>
                    <h2>Welcome to Haj/Umrah Application Processing System</h2>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                    <a class="btn11" href="#0"><span>Learn More</span><div class="transition"></div></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('uploads/about_01.jpg') }}" alt="" class="img-fluid img-rounded">
                    <a href="#" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="hr1">

        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h2>Get best plans for Haj/Umrah Application Processing System</h2>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Donec eget est ut nulla tristique maximus quis a nisi.</li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Integer vel metus pretium, mollis quam id, dignissim leo.</li>
                    </ul>

                    <a href="#" class="btn11"><span>Learn More</span><div class="transition"></div></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="message-box">
                    <h2>We Are Haj/Umrah Application Processing System</h2>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                    <a href="#" class="btn11"><span>Learn More</span><div class="transition"></div></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div class="parallax section parallax-off" data-stellar-background-ratio="0.9" style="background-image:url('{{ asset('uploads/parallax_04.jpg') }}');">
    <div class="container">
        <div class="row text-center stat-wrap">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <span class="global-radius icon_wrap"><i class="flaticon-briefcase"></i></span>
                <p class="stat_count">1200</p>
                <h3 class="line-hv">Packages Issued</h3>
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <span class="global-radius icon_wrap"><i class="flaticon-happy"></i></span>
                <p class="stat_count">1150</p>
                <h3 class="line-hv">Happy Clients</h3>
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <span class="global-radius icon_wrap"><i class="flaticon-idea"></i></span>
                <p class="stat_count">100</p>
                <h3 class="line-hv">Customer Services</h3>
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <span class="global-radius icon_wrap"><i class="flaticon-customer-service"></i></span>
                <p class="stat_count">1500</p>
                <h3 class="line-hv">Answered Questions</h3>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>The Packages include</h3>
            <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
        </div><!-- end title -->

        <div class="owl-services owl-carousel owl-theme">
            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{ asset('uploads/service_01.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{ asset('uploads/service_01.jpg') }}" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Hotel Accomodation</h3>
                    <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                </div>
            </div>
            <!-- end service -->

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{ asset('uploads/service_02.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{ asset('uploads/service_02.jpg') }}" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Travel</h3>
                    <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                </div>
            </div>
            <!-- end service -->

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{ asset('uploads/service_03.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{ asset('uploads/service_03.jpg') }}" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Route Selection</h3>
                    <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                </div>
            </div>
            <!-- end service -->

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="{{ asset('uploads/service_04.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="{{ asset('uploads/service_04.jpg') }}" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Special Disoounts</h3>
                    <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                </div>
            </div>
            <!-- end service -->
        </div><!-- end row -->

        <hr class="hr1">

        <div class="text-center">
            <a href="#" class="btn11"><span>View Our Portfolio</span></a>
        </div>
    </div><!-- end container -->
</div><!-- end section -->

{{--<div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('uploads/parallax_05.png');">--}}
    {{--<div class="container">--}}
        {{--<div class="row text-center align-items-center">--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="customwidget text-left">--}}
                    {{--<h1>Haj/Umrah Application Processing System Websites</h1>--}}
                    {{--<p>Full access control of the background parallax effects, <br>change your awesome background elements and edit colors from style.css or colors.css</p>--}}
                    {{--<ul class="list-inline">--}}
                        {{--<li><i class="fa fa-check"></i> Custom Sections</li>--}}
                        {{--<li><i class="fa fa-check"></i> Parallax's</li>--}}
                        {{--<li><i class="fa fa-check"></i> Icons & PSD</li>--}}
                        {{--<li><i class="fa fa-check"></i> Limitless Colors</li>--}}
                    {{--</ul><!-- end list -->--}}
                    {{--<a href="#" class="btn11"><span>Learn More</span></a>--}}
                {{--</div>--}}
            {{--</div><!-- end col -->--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="text-center image-center hidden-sm hidden-xs">--}}
                    {{--<img src="{{ asset('uploads/device_03.png') }}" alt="" class="img-fluid wow fadeInUp">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!-- end row -->--}}
    {{--</div><!-- end container -->--}}
{{--</div><!-- end section -->--}}

{{--<div id="features" class="section lb">--}}
    {{--<div class="container">--}}
        {{--<div class="section-title text-center">--}}
            {{--<h3>Features & Overviews</h3>--}}
            {{--<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>--}}
        {{--</div><!-- end title -->--}}

        {{--<div class="row">--}}
            {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
                {{--<ul class="features-left">--}}
                    {{--<li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">--}}
                        {{--<i class="flaticon-wordpress-logo"></i>--}}
                        {{--<div class="fl-inner">--}}
                            {{--<h4>WordPress Installation</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">--}}
                        {{--<i class="flaticon-windows"></i>--}}
                        {{--<div class="fl-inner">--}}
                            {{--<h4>Browser Compatible</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">--}}
                        {{--<i class="flaticon-price-tag"></i>--}}
                        {{--<div class="fl-inner">--}}
                            {{--<h4>eCommerce Ready</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--}}
                        {{--<i class="flaticon-new-file"></i>--}}
                        {{--<div class="fl-inner">--}}
                            {{--<h4>Easy to Customize</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 hidden-xs hidden-sm">--}}
                {{--<img src="{{ asset('uploads/ipad.png') }}" class="img-center img-fluid" alt="">--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
                {{--<ul class="features-right">--}}
                    {{--<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">--}}
                        {{--<i class="flaticon-pantone"></i>--}}
                        {{--<div class="fr-inner">--}}
                            {{--<h4>Limitless Colors</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">--}}
                        {{--<i class="flaticon-cloud-computing"></i>--}}
                        {{--<div class="fr-inner">--}}
                            {{--<h4>Lifetime Update</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">--}}
                        {{--<i class="flaticon-line-graph"></i>--}}
                        {{--<div class="fr-inner">--}}
                            {{--<h4>SEO Friendly</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">--}}
                        {{--<i class="flaticon-coding"></i>--}}
                        {{--<div class="fr-inner">--}}
                            {{--<h4>Simple Clean Code</h4>--}}
                            {{--<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div><!-- end col -->--}}
        {{--</div><!-- end row -->--}}
    {{--</div><!-- end container -->--}}
{{--</div><!-- end section -->--}}

<div id="testimonials" class="parallax section db parallax-off" style="background-image:url({{ asset('uploads/parallax_03_1.jpg') }});">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Haj/Umrah Application Processing System website template!</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <div class="testimonial clearfix">

                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                            <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                            <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div><!-- end testimonial -->
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="hr1">

        <div class="row logos">
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="{{ asset('uploads/logo_01.png') }}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="{{ asset('uploads/logo_02.png') }}uploads/logo_02.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="{{ asset('uploads/logo_03.png') }}uploads/logo_03.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="{{ asset('uploads/logo_04.png') }}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="{{ asset('uploads/logo_05.png') }}" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="{{ asset('uploads/logo_06.png') }}" alt="" class="img-repsonsive"></a>
            </div>
        </div><!-- end row -->

    </div><!-- end container -->
</div><!-- end section -->
<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@endsection