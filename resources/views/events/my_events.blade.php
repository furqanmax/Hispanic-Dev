@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section class="my-3">
        <div class="container-fluid">
            <div class="row m-0 p-0">
                <div class="col-md-2">
                    <img src="{{ asset('svg/profile.jpg') }}" width="100" height="100" class="rounded-circle" alt="">
                    <h3 class="text-18 font-weight-bold pt-3">
                        Tauseef Ahmed
                    </h3>
                    <h4 class="text-16">
                        tauseefahmed782@gmail.com
                    </h4>

                    <ul class="list-group mt-2">
                        <a href="{{route('add.new.post')}}" class="text-color">
                            <li class="list-group-item  ">Add New Post</li>
                        </a>
                        <a href="{{route('profile')}}" class="text-color">
                            <li class="list-group-item ">My Posts</li>

                        </a>
                        <li class="list-group-item">Draft</li>
                        <a href="{{route('edit.profile')}}" class="text-color">
                            <li class="list-group-item">Change profile</li>

                        </a>
                        <a href="{{route('my.add')}}"  class="text-color">
                        <li class="list-group-item">My Ads</li>
                            
                        </a>
                        <a href="{{route('my.yellow.page')}}" class="text-color">
                            <li class="list-group-item">My Yellow</li>
                        </a>
                        <a href="{{route('my.jobs')}}" class="text-color">
                        <li class="list-group-item">My Jobs</li>
                        </a>
                        <a href="{{route('buy.and.sell')}}" class="text-color">
                            <li class="list-group-item">Buy & Sell</li>
                        </a>
                        <a href="{{route('subscription')}}" class="text-color">
                            <li class="list-group-item">Subscription</li>
                        </a>
                        <a href="{{route('my.events')}}" class="text-color">
                        <li class="list-group-item active">Events</li>

                        </a>
                        <a href="{{route('my.activities')}}" class="text-color">
                        <li class="list-group-item">Activities</li>

                        </a>
                        <a href="{{route('notification')}}" class="text-color">
                        <li class="list-group-item">Notifications</li>

                        </a>
                    </ul>
                </div>
                <div class="col-md-8">
                    {{-- heading --}}
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h3 class="text-22 font-weight-bold">
                                My Events
                            </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="list-inline mb-0 pb-0">

                                <li class="list-inline-item">
                                    <img src="{{asset('svg/bar-chart.png')}}" alt="">
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{route('Create.events')}}" class="btn btn-custom shadow-none px-5 py-2 "> Create Event</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- posts --}}
                    <div class="mt-3">
                        {{-- card --}}
                        <div class="card p-2 shadow-none custom_grey ">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-md-center">
                                    <img src="{{ asset('svg/post.png') }} " class="img img-fluid" alt="">
                                </div>
                                <div class="col-md-8">
                                    <p class="pb-2 mb-0">
                                        FRI,OCT 22, 21 @6:00 PM IST
                                    </p>
                                    <p class="text-16 font-weight-bold pb-0 mb-0">
                                        Post Title
                                    </p>
                                    <p class="text-14">
                                        It is a long established fact that a reader will be
                                        distracted by will be distracted by the...More
                                    </p>
                                    {{--  --}}
                                    <ul class="list-inline m-0 p-0">
                                        <li class="list-inline-item ">
                                            <a href="http://" class="btn  m-0 btn-custom shadow-none btn-sm">Upcoming</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="far fa-thumbs-up px-2"></i>
                                            <i class="far fa-thumbs-down"></i>
                                            <i class="fa fa-share-alt px-2"></i>
                                            <i class="far fa-comment"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-14">
                                                1 Sopt Left
                                            </p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-14">
                                                2 Attendees
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 text-right pr-4">
                                    <i class="fas fa-ellipsis-h text-22"  type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    

                                    <div class="dropdown-menu event_dropdown">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Deactive</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        
                                    </div>
                                    <!-- Basic dropdown -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <img src="{{ asset('svg/ads2.jpg') }}" class="img img-fluid" style="height: 700px;" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->



@endsection
