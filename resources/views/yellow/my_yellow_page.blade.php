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
                            <li class="list-group-item active">My Yellow</li>
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
                        <li class="list-group-item">Event Creation</li>

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
                             My Yellow Pages
                            </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="list-inline mb-0 pb-0">

                                 {{-- sort by posts --}}
                                 <li class="list-inline-item">
                                    <img src="{{ asset('svg/bar-chart.png') }}" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" alt="" srcset="">



                                    <div class="dropdown-menu yellow_page p-3 ">
                                        <p class="font-weight-bold">
                                            Sort By Posts
                                        </p>
                                        <div class=" mb-0 pb-0" href="#">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                    Date
                                                </label>
                                            </div>
                                        </div>
                                        <div class=" pb-0 mb-0" href="#">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                    Relevance
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Basic dropdown -->
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{route('create.yellow.page')}}" class="btn btn-custom shadow-none px-5 py-2 "> Create Yellow Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- posts --}}
                    <div class="mt-3">
                        {{-- card --}}
                        <div class="card p-2 shadow-none custom_grey ">
                            <div class="row">
                                <div class="col-md-2 ">
                                    <img src="{{ asset('svg/post.png') }} " class="img img-fluid" alt="">
                                </div>
                                <div class="col-md-7">
                                   
                                    <p class="text-16 font-weight-bold pb-2 mb-0">
                                        Foxy???s Restaurants
                                    </p>
                                    <p class="text-14">
                                        It is a long established fact that a reader will be distracted by will be..MoreIt is a long established fact that a reader will be distracted by                                    </p>
                                    {{-- link --}}
                                    <p class="grey-text text-14">
                                        https://www.youtube.com/watch?v=zbIeCycHiOI
                                    </p>
                                    {{--  --}}
                                    <ul class="list-inline text-14 m-0 p-0">
                                       
                                        <li class="list-inline-item">
                                            <i class="far fa-thumbs-up px-2"></i>65258&ensp;
                                            <i class="far fa-thumbs-down"></i>
                                            <i class="fa fa-share-alt px-2"></i>
                                            <i class="far fa-comment"></i>
                                        </li>
                                        <li class="list-inline-item">
                                             <i class="far fa-star" aria-hidden="true"></i>   4.5 (26)
                                        </li>
                                        <li class="list-inline-item">
                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 text-right pr-4">
                                    <i class="fas fa-ellipsis-h text-22"  type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    

                                    <div class="dropdown-menu yellow_dropdown">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        
                                    </div>
                                    <!-- Basic dropdown -->
                                    <p class="text-14 text-left">
                                        500081, Hyderabad, 
Hi tech city, white fields, Kondapur
                                    </p>
                                    <p class="text-left">
                                        <i class="far fa-clock pr-1 "></i> OPEN NOW
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- create yelloe page --}}
                        <div class="mt-3 text-center">
                        <a href="{{route('create.yellow.page')}}" class="btn btn-custom shadow-none px-5 py-2 "> Create Yellow Page</a>

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
