@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section class="my-3">
        <div class="container-fluid">
            <div class="row m-0 p-0">
{{-- profile --}}
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
        <li class="list-group-item">Event Creation</li>

        </a>
        <a href="{{route('my.activities')}}" class="text-color">
        <li class="list-group-item active">Activities</li>

        </a>
        <a href="{{route('notification')}}" class="text-color">
        <li class="list-group-item">Notifications</li>

        </a>
    </ul>
</div>
{{--  --}}
                <div class="col-md-8 ">
                    {{-- heading --}}
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h3 class="text-22 font-weight-bold mb-4">
                                My Activities </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            {{-- clear all --}}
                            <ul class="list-inline mb-0 pb-0">
                                <li class="list-inline-item font-weight-bold ">
                                    <form action="">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input " name="" id="" value="checkedValue">
                                              Clear All                                      </label>
                                          </div>
                                    </form>

                                </li>
                               

                            </ul>
                        </div>
                    </div>
                   {{-- viewd posts --}}
                   <p class="text-14">
                    Viewed Post’s
                   </p>
                    {{-- posts --}}
                    <div class="mt-3">
                        {{-- card --}}
                        <div class="card p-2 shadow-none custom_grey ">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-md-center">
                                    <img src="{{ asset('svg/post.png') }} " class="img img-fluid" alt="">
                                </div>
                                <div class="col-md-7">
                                    <p class="text-16 font-weight-bold pb-2 mb-0">
                                        Foxy’s Restaurants
                                    </p>
                                    <p class="pb-2 text-14 mb-0">
                                        It is a long established fact that a reader will be distracted by will be..More
                                    </p>
                                    
                                    <p class="text-12 grey-color">
                                        https://www.youtube.com/watch?v=zbIeCycHiOI
                                    </p>
                                    {{--  --}}
                                    <ul class="list-inline m-0 p-0">
                                        <li class="list-inline-item">
                                            <a href="http://" class="btn shadow-none btn-sm btn-custom">Contact </a>
                                        </li>
                                            <li class="list-inline-item">
                                            <i class="far fa-thumbs-up "></i>  6205 
                                            <i class="far fa-thumbs-down pl-2"></i>   
                                            <i class="fa fa-share-alt px-2"></i>
                                            <i class="far fa-comment pl-1"></i>
                                        </li>
                                        <li class="list-inline-item pl-1">
                                            <p class="text-14">
                                              <i class="fas fa-star  grey-color  "></i> 4.5 (26)
                                            </p>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    {{-- delete --}}
                                <p class="text-right pb-2 mb-0">
                                    <i class="fas   fa-trash text-14  text-danger"></i>
                                    </p>                                    

                                    
                                    <p class="pb-1">
                                        <img src="{{asset('svg/map-pin.svg')}}" alt="" srcset=""> 500081, Hyderabad, 
                                        Hi tech city, white fields, Kondapur
                                    </p>
                                    <p class="text-left pb-2 mb-0">
                                        <i class="far fa-clock pr-1 "></i> OPEN NOW <span class="text-14">  
                                             </p>
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
