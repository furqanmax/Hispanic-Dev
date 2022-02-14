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
                                Suggested events in Hyderbad, Telengana </h3>
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
                            <li class="list-inline-item">
                                <li class="list-inline-item">
                                    <!-- All Type -->
                                    <select class="browser-default custom-select text-12 font-weight-bold ">
                                       <option selected>All Type</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                     </select>
                                   
                                   
                               </li>
                            </li>
                            <li class="list-inline-item">
                                <li class="list-inline-item">
                                    <!-- Any Type -->
                                    <select class="browser-default custom-select text-12 font-weight-bold ">
                                       <option selected>Any Type</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                     </select>
                                   
                                   
                               </li>
                            </li>
                            <li class="list-inline-item">
                                <li class="list-inline-item">
                                    <!-- Any Distance -->
                                    <select class="browser-default custom-select text-12 font-weight-bold ">
                                       <option selected>Any Distance</option>
                                       <option value="1">One</option>
                                       <option value="2">Two</option>
                                       <option value="3">Three</option>
                                     </select>
                                   
                                   
                               </li>
                            </li>
                            <li class="list-inline-item">
                                 <!-- Any Category -->
                                 <select class="browser-default custom-select text-12 font-weight-bold ">
                                    <option selected>Any Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                
                                
                            </li>
                        </ul>
                        
                    </div>
                    {{-- posts --}}
                    <div class="mt-3">
                        {{-- card --}}
                        <a href="{{ route('events')}}">
                            
                    
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
                                
                            </div>
                        </div>
                        </a>
                        
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
