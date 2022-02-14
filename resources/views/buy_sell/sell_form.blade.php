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
                                Sells in Hyderbad, Telengana </h3>
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
                                        <form action="">
                                            <div class=" mb-0 pb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        date
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        distance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        rating
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        name (A - Z)
                                                    </label>
                                                </div>
                                            </div>
                                            
                                            <p class="font-weight-bold ">
                                                Pricing
                                            </p>
                                            
                                            <div class=" pb-0 mb-0" href="#">
                                               <div class="row " style="max-width: 50%;">
                                                   <div class="col-md-6">
                                                       <div class="form-group" >
                                                         <label for="">Min</label>
                                                         <input type="text" class="form-control text-14" name="" id=""  placeholder="$200">
                                                       </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label for="">Max</label>
                                                      <input type="text" class="form-control text-14" name="" id=""  placeholder="$200">
                                                    </div>
                                                </div>
                                               </div>
                                            </div>

                                        </form>
                                        

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
                                Bike
                            </li>
                            <li class="list-inline-item">
                                Mobiles
                            </li>
                            <li class="list-inline-item">
                            
                                Electronics & Appliances

                            </li>
                        </ul>
                        
                    </div>
                    {{-- posts --}}
                    <div class="mt-3">
                        <a href="{{ route('selling.details')}}">
                        <div class="card p-2 shadow-none custom_grey ">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-md-center">
                                    <img src="http://localhost/hispanic/public/svg/post.png " class="img img-fluid" alt="">
                                </div>
                                <div class="col-md-10">
                                   
                                    <p class="text-16 font-weight-bold mb-0 pb-2">
                                        Apple iPhone 13 128 GB, Midnight (Black)
                                    </p>

                                    <p class="text-14 pb-2 mb-0">
                                       <span>Yesterday</span> | <span>$ 899</span>   
                                       
                                    </p>
                                    
                                    <p class="text-14 pb-2 mb-0">
                                        Hyderabad, Telangana  
                                    </p>
                                    <ul class="list-inline text-14 m-0 p-0">
                                       
                                        <li class="list-inline-item">
                                            <i class="far fa-thumbs-up "></i>&ensp;65258 
                                            <i class="fa fa-share-alt "></i>&ensp; &ensp;
                                            <i class="far fa-comment"></i>
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
