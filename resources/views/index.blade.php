@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner parallax-window"  style="margin-top: 45px;" data-parallax="scroll"
                 data-image-src="/img/GreenNight.jpg">
                <div class="row-fluid">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-12">
                            <div class="col-sm-12" id="resumeHeading" style="background-color: black; margin-top: 10%;">
                                <div class="col-sm-6">
                                    <img class="img-responsive img-circle center-block" id="portrait"
                                         src="/img/RobertKerr.jpg">

                                </div>
                                <div class="col-sm-6">

                                    <h1 class="resumeText" id="name">Robert Kerr</h1>
                                    <hr id="hr1">
                                    <h3 class="resumeText" id="title">Web Developer</h3>
                                    <h5>Welcome! I'm a Full-Stack Developer seeking a full-time position that will challenge my skills and further hone my engineering repertoire. I am interested in useful,
                                        interesting and emerging web technologies especially those involving an emphasis on OOP (Object-Oriented
                                        Programming) and MVC (Model-View-Controller) software structure.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 divider"></div>
        </div>
        <section class="banner1" class="bg-primary">

            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <h2 class="bannerFont text-center">Contact Me</h2>
                            <hr class="small hr">
                            <div class="col-sm-4">
                                <div class="service-item">
                                    <a class="link" href="mailto:rksugarfree@gmail.com">
                                    <span class="spin fa-stack fa-4x hover" data-id="0">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="icons fa fa-envelope fa-stack-1x"></i>
                                    </span>
                                    </a>
                                    <h4 class="whiteOnHover0">
                                        <strong>Email</strong>
                                    </h4>
                                    {{--<p class="whiteOnHover0">Junior Web Developer</p>--}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service-item">
                                    <a class="link" target="_blank" href="https://linkedin.com/in/robertcrawleykerr">
                                    <span class="spin fa-stack fa-4x hover" data-id="1">
                                       <i class="fa fa-circle fa-stack-2x"></i>
                                       <i class="icons fa fa-linkedin fa-stack-1x"></i>
                                   </span>
                                    </a>
                                    <h4 class="whiteOnHover1">
                                        <strong>LinkedIn</strong>
                                    </h4>
                                    {{--<p class="whiteOnHover1">600+ hours hands-on with the LAMP stack.</p>--}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="service-item">
                                    <a class="link" href="/contact/create">
                                    <span class="spin fa-stack fa-4x hover" data-id="2">
                                       <i class="fa fa-circle fa-stack-2x"></i>
                                       <i class="icons fa fa-moon-o fa-stack-1x"></i>
                                   </span>
                                    </a>
                                    <h4 class="whiteOnHover2">
                                        <strong>Private Message</strong>
                                    </h4>
                                    {{--<p class="whiteOnHover2">Built with Laravel, JavaScript, and more.</p>--}}
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <div class="row">

            <div class="col-sm-12 divider"></div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-10 col-sm-offset-1 parallax-window" data-parallax="scroll"
                 data-image-src="/img/GreenNight.jpg"
                 id="contentHouser">

                <div class="col-sm-12" id="resumeContent">
                    <h2 class="bannerFont text-center">Development Experience</h2>
                    <hr class="small hr">
                    <h3>Codeup Software Career Accelerator | Student | Graduated September 2016</h3>
                    <h5>Project based accelerated learning program focused on helping students transition into software development. Spent over 600+ hours in class and study halls over the four months spent in school.</h5>
                    <h3>Dryden Labs | Junior Web Developer | August 2014 – September 2015</h3>
                    <ul>
                        <li>Maintained multiple client websites utilizing WordPress, Plug-ins and custom CSS.</li>
                        <li>Managed SEO plug-ins across a dozen sites.</li>
                        <li>Discovered and instantiated keywords via Google Analytics and SEO Yoast.</li>
                    </ul>
                    <h1 class="bannerFont text-center">Projects</h1>
                    <hr class="hr">
                    <h3>210 Hopper | Final Project</h3>
                    <ul>
                        <li>Worked with group members to create an interactive web application that lists specials,
                            events and reviews for venues in the San Antonio area.
                        </li>
                        <li>Laravel and Bootstrap frameworks, JavaScript, jQuery, MySQL.
                        </li>
                    </ul>
                    <h3>Reddit Clone</h3>
                    <ul>
                        <li>Worked with a partner to create a basic functional clone of the popular Reddit forums.
                        </li>
                        <li>Laravel and Bootstrap frameworks, JavaScript, jQuery, MySQL.
                        </li>
                    </ul>
                    <h3>HearthLister</h3>
                    <ul>
                        <li>An interactive deck-builder created with a teammate using Ajax requests and the Hearthstone
                            API.
                        </li>
                        <li>Bootstrap framework, PHP, JavaScript, jQuery, MySQL.
                        </li>
                        <li>Still in production.</li>
                    </ul>
                    <h3>Weather Map Application</h3>
                    <ul>
                        <li>Interactive application that displays the weather forecast for up to 16 days using
                            OpenWeatherMap API. Google Maps API used to display and update location information.
                        </li>
                        <li>Bootstrap Framework, JavaScript, jQuery.</li>
                    </ul>
                    <h1 class="bannerFont text-center">Employment History</h1>
                    <hr class="hr">
                    <ul>
                        <li>Dave & Buster’s | Server | September 2015 – August 2016
                        </li>
                        <li>Olive Garden | Server | December 2012 – September 2015</li>
                        <li>MD Air Conditioning | Customer Service Assistant | June 2011 – December 2012</li>
                        <li>Papa John’s | Delivery Driver | October 2010 – June 2011</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 divider"></div>
        </div>
    </div>

@stop