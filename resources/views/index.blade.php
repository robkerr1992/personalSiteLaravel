@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 banner parallax-window" data-parallax="scroll"
                 data-image-src="/img/GreenNight.jpg">
                <div class="row-fluid">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-12" style="margin-top: 5%;">
                            <div class="col-md-12" id="resumeHeading" style="background-color: black;">
                                <div class="col-md-6">
                                    <img class="img-responsive img-circle center-block" id="portrait"
                                         src="/img/RobertKerr.jpg">

                                </div>
                                <div class="col-md-6">

                                    <h1 class="resumeText" id="name">Robert Kerr</h1>
                                    <hr id="hr1">
                                    <h3 class="resumeText" id="title">Web Developer</h3>
                                    <h5>210-844-5363 | robertcrawleykerr@gmail.com | github.com/robkerr1992</h5>
                                    <h5>Full-Stack Web Developer seeking to hone his engineering repertoire with useful,
                                        interesting
                                        and emerging web technologies with an emphasis on OOP (Object-Oriented
                                        Programming) and
                                        MVC
                                        (Model-View-Controller) software structure.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="banner1" class="bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 class="bannerFont">Development Experience</h2>
                        <hr class="small hr">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                    <!--                                <a class="link" href="#">-->
                                    <span class="spin fa-stack fa-4x hover" data-id="0">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="icons fa fa-code fa-stack-1x"></i>
                                    </span>
                                    <!--                                </a>-->
                                    <h4 class="whiteOnHover0">
                                        <strong>Dryden Labs LLC</strong>
                                    </h4>
                                    <p class="whiteOnHover0">Junior Web Developer</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                    <!--                                <a class="link" href="#">-->
                                    <span class="spin fa-stack fa-4x hover" data-id="1">
                                       <i class="fa fa-circle fa-stack-2x"></i>
                                       <i class="icons fa fa-cutlery fa-stack-1x"></i>
                                   </span>
                                    <!--                                </a>-->
                                    <h4 class="whiteOnHover1">
                                        <strong>Codeup</strong>
                                    </h4>
                                    <p class="whiteOnHover1">600+ hours hands-on with the LAMP stack.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                    <!--                                <a class="link" href="#">-->
                                    <span class="spin fa-stack fa-4x hover" data-id="2">
                                       <i class="fa fa-circle fa-stack-2x"></i>
                                       <i class="icons fa fa-moon-o fa-stack-1x"></i>
                                   </span>
                                    <!--                                </a>-->
                                    <h4 class="whiteOnHover2">
                                        <strong>Projects</strong>
                                    </h4>
                                    <p class="whiteOnHover2">Built with Laravel, JavaScript, and more.</p>
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

            <div class="col-md-12 divider"></div>
        </div>
        <div class="row-fluid">
            <div class="col-md-10 col-md-offset-1 parallax-window" data-parallax="scroll"
                 data-image-src="/img/GreenNight.jpg"
                 id="contentHouser">

                <div class="col-md-12" id="resumeContent">
                    <hr class="hr">
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
    </div>
@stop