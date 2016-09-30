@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-sm-12 divider"></div>
    </div>
    <div style="margin-top: 50px;" class="container-fluid">
        <div class="row">
            <div style="height: 650px; overflow: auto;" class="col-sm-6 col-md-5 col-md-offset-1">
                {{--<h1 class="bannerFont text-center">Projects</h1>--}}
                @foreach($projects as $project)
                    <div style="" data-value="{{ $project->id }}" class="col-sm-10 col-sm-offset-1 project-card">
                        <h3 id="title{{ $project->id }}" class="floatleft">{{ $project->title }}</h3>
                        <h4 style="padding-top: 10px;" class="clearleft">{{ $project->date }}</h4>
                        <p id="tech{{ $project->id }}" class="clearleft" hidden>{{ $project->technologies }}</p>
                        <p id="description{{ $project->id }}" hidden>{{ $project->description }}</p>
                        <p id="location{{ $project->id }}" hidden>{{ $project->location}}</p>
                        <p id="image{{ $project->id }}" hidden>{{ $project->image }}</p>
                    </div>

                @endforeach
            </div>
            <div class="col-sm-6 col-md-5">
                <a class="projectlocation" href="#"><h1 class="bannerFont text-center" id="projectTitle">210 Hopper</h1></a>
                <div style="background-color: black; border: 2px solid green; color: green; height: 525px; margin-top: 15px;" class="col-sm-10 col-sm-offset-1" id="projectContent">
                    <a class="projectlocation" href="#"><img class="img-responsive img-rounded" id="projectImage" style="margin-top: 5%;" src="/img/210Hopper.jpg"></a>
                    <hr class="small hr">
                    <h4 id="projectDescription">Interactive mobile responsive web application that lists specials, events and reviews for venues in the San Antonio area. Capstone Final Project for Codeup.</h4>
                    <h4 id="projectTech">Laravel and Bootstrap frameworks, PHP, JavaScript, jQuery, MySQL</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12 divider"></div>
    </div>
@stop