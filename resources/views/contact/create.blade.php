@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="contactform">
            <div class="row-fluid">


                <div class="col-sm-8 col-sm-offset-2" id="box">
                    <h1 style="color: green;" class="bannerFont text-center">Contact Me</h1>

                    <hr class="hr">


                    <form class="form-horizontal" method="POST" action="{{ action('MessageController@store') }}"
                          id="contact_form">
                        {{ csrf_field() }}
                        <fieldset>
                            <!-- Form Name -->


                            <!-- Text input-->

                            <div class="form-group">

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input style="border: none;" name="name" placeholder="Name"
                                               value="{{ old('name') }}"
                                               class="form-control greenInput" type="text">
                                    </div>
                                </div>
                            </div>
                        @include('partials.error', ['field' => 'name'])

                        <!-- Text input-->
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope"></i></span>
                                        <input style="border: none;" name="email" placeholder="E-Mail Address"
                                               value="{{ old('email') }}"
                                               class="form-control greenInput" type="text">
                                    </div>
                                </div>
                            </div>
                        @include('partials.error', ['field' => 'email'])

                        <!-- Text input-->

                            <div class="form-group">

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-earphone"></i></span>
                                        <input style="border: none;" name="phone" placeholder="Phone #"
                                               value="{{ old('phone') }}"
                                               class="form-control greenInput" type="text">
                                    </div>
                                </div>
                            </div>
                        @include('partials.error', ['field' => 'phone'])
                        <!-- Text input-->

                            <div class="form-group">

                                <div class="col-sm-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-pencil"></i></span>
                                        <textarea style="border: none;" class="form-control greenInput" name="message"
                                                  placeholder="Message" value="{{ old('message') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            @include('partials.error', ['field' => 'message'])
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <button id="contact-btn" type="submit" class="btn btn-warning pull-right">Send <span
                                                class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>

                        </fieldset>
                    </form>


                </div>
                {{--<div class="col-sm-6 col-sm-offset-3">--}}
                    {{--<div class="service-item" id="myinformation">--}}
                        {{--<a class="link" href="#"><span class="spin fa-stack fa-4x hover" data-id="0">--}}
                                        {{--<i class="fa fa-circle fa-stack-2x"></i>--}}
                                        {{--<i class="icons fa fa-fire fa-stack-1x"></i>--}}
                                    {{--</span></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>

    </div>

@stop