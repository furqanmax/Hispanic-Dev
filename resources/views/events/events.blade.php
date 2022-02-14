@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section class="my-4">
        <div class="container-fluid">
            <div class="row p-0 m-0 px-3">
                <div class="col-md-8 offset-md-2">
                    {{-- Header --}}
                    <div class="card p-3 custom_grey shadow-none">
                        <p class="grey-color text-14 pb-1 mb-0">
                            Sunday, October 24, 2021
                        </p>
                        <h3 class="text-22 font-weight-bold">
                            Blockchain Tech Elrond and Layer 1 Project
                        </h3>
                        {{-- profile --}}
                        <div class="">
                            <div class="row">
                                <div class="col-md-1 ">
                                    <img src="{{ asset('svg/profile.png') }}" width="50" alt="" srcset="">
                                </div>
                                <div class="col-md-10 m-0 p-0">
                                    <p class="text-14 grey-color pb-0 mb-0">
                                        Hosted by
                                    </p>
                                    <p class="text-14 grey-color pb-0 mb-0 font-weight-bold">
                                        Max jack
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- details --}}
                    <div class="event-details mt-2">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card shadow-none p-3 custom_grey ">
                                    {{-- image slider --}}
                                    <!--Carousel Wrapper-->
                                    <div id="carousel-example-1z" class="carousel slide carousel-slide"
                                        data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-1z" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                        </ol>
                                        <!--/.Indicators-->
                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">
                                            <!--First slide-->
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="{{asset('svg/slide.png')}}"
                                                    alt="First slide">
                                            </div>
                                            <!--/First slide-->
                                            <!--Second slide-->
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                                    alt="Second slide">
                                            </div>
                                            <!--/Second slide-->
                                            <!--Third slide-->
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                                    alt="Third slide">
                                            </div>
                                            <!--/Third slide-->
                                        </div>
                                        <!--/.Slides-->
                                        <!--Controls-->
                                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-1z" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!--/.Controls-->
                                    </div>
                                    <!--/.Carousel Wrapper-->

                                    {{-- content --}}
                                    <div class="event-content text-14 mt-4">
                                        <p class="">
                                            This VIRTUAL event will be an opportunity to learn about the Elrond blockchain and allow some time for others in Las Vegas and surrounding area to share their vision and experience with blockchain and cryptocurrency.

                                        </p>
                                        <p>
                                            We will have a speaker who can provide an overview of Elrond Technology and how it compares to the top 3 crypto assets.

                                        </p>
                                    </div>
                                    <hr>
                                    {{-- comments --}}

                                    <h3 class="text-18 font-weight-bold pb0 mb-0">
                                        Comments
                                    </h3>
                                    <hr>
                                    {{-- comment-field --}}
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-1 d-flex align-items-md-center">
                                                <img src="{{asset('svg/profile.png')}}" alt="" srcset="">
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group mt-0 pt-0">
                                                  <label for=""></label>
                                                  <textarea class="form-control text-16" name="" id="" placeholder="Add Comments" rows="2"></textarea>
                                                </div>
                                                {{-- submit --}}
                                                <button type="submit" class="btn btn-custom shadow-none btn-sm m-0">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    {{-- all comments --}}
                                        <div class="text-12">
                                            <div class="row ">
                                                <div class="col-md-1 ">
                                                    <img src="{{asset('svg/profile.png')}}" alt="" srcset="">
                                                </div>
                                                <div class="col-md-11">
                                                   <p class="mb-0 pb-1 grey-color  ">
                                                    Max jack <span class="pl-3">
                                                        1 Day ago
                                                    </span>
                                                   </p>
                                                   <p class="mb-0 pb-1 ">
                                                    This Event is tentative based on participation. those who RSVP will receive meeting password
                                                   </p>
                                                   <p class="grey-color">
                                                    <img src="{{asset('svg/thumbs-up.svg')}}" width="14" alt="" srcset=""> 65235&ensp;
                                                    <img src="{{asset('svg/thumbs-down.svg')}}" width="14" alt="" srcset="">
                                                   </p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-none p-3 custom_grey">
                                    <div class="time">
                                        <div class="row">
                                            <div class="col-md-1">
                                        <i class="far fa-clock    "></i>

                                            </div>
                                            <div class="col-md-10">
                                                <span class="">
                                                    Sunday, October 24, 2021<br>
                                                    5:30 AM to 7:00 AM IST
                                                </span>
                                            </div>
                                        </div>

                                        
                                        
                                    </div>
                                    <div class="mt-3 video-link">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <i class="fas fa-video    "></i>

                                            </div>
                                            <div class="col-md-10">
                                                <span class="">
                                                    Online event<br>
                                                    Link visible for attendees
                                                </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="mt-3 location">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{asset('svg/map-marker.svg')}}" width="16" alt="">
                                            </div>
                                            <div class="col-md-10">
                                                <span class="">
                                                    Alkapuri road no 1 plot no 7&8, near sbi bank opp<br>
                                                    Tree house, Hyderabad, Telangana 500035
                                                </span>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                {{-- buttons --}}
                                <div class="actions mt-2 ">
                                    <a href="" class="btn btn-link btn-md btn-block font-weight-bold text-decoration-none ">Report this event</a>
                                    <a href="http://" class="btn bnt-block btn-custom btn-sm shadow-none btn-block">Attend</a>
                                    <a href="http://" class="btn bnt-block btn-border mt-3 btn-sm shadow-none btn-block">   <i class="fa fa-share-alt" aria-hidden="true"></i> &ensp; Share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <img src="{{ asset('svg/ads1.jpg') }}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
