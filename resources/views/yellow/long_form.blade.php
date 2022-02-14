@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section class="my-3">
        <div class="container-fluid">
            <div class="row m-0 p-0">

                <div class="col-md-8 offset-md-2">
                    {{-- heading --}}
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h3 class="text-22 font-weight-bold">
                                Restaurants in Hyderbad, Telengana </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            {{-- search --}}
                            <ul class="list-inline mb-0 pb-0">
                                <li class="list-inline-item">
                                    <form action="" class="text-14">
                                        <div class="input-group md-form form-sm form-2 pl-0 ">
                                            <input class="form-control my-0 py-1 red-border" type="text"
                                                placeholder="Search" aria-label="Search">
                                            <div class="input-group-append">
                                                <span class="input-group-text btn-custom " id=""><i
                                                        class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </form>

                                </li>
                                {{-- sort by posts --}}
                                <li class="list-inline-item">
                                    <img src="{{ asset('svg/bar-chart.png') }}" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" alt="" srcset="">



                                    <div class="dropdown-menu long_form_dropdown p-3 ">
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

                            </ul>
                        </div>
                    </div>
                    {{-- filters --}}
                    <div class="filters">
                        <ul class="list-inline">
                            <li class="list-inline-item active btn-custom px-3 py-1">
                                <i class="fa fa-filter" aria-hidden="true"></i> All
                            </li>
                            <li class="list-inline-item">
                                Order Online
                            </li>
                            <li class="list-inline-item">
                                text2
                            </li>
                            <li class="list-inline-item">
                            
                                text3
                            </li>
                        </ul>
                        
                    </div>
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
