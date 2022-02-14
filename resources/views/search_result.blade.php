@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section>
        <div class="container-fluid">
            <div class="ads my-5 p-0">
                <div class="row m-0 p-0">
                    <div class="col-md-2">
                        <p class="h4 mb-2 text-22 font-weight-bold">Search Filters</p>
                        <!-- checkbox-->
                        <!-- Default unchecked -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input text-14" id="titles">
                            <label class="custom-control-label text-14 pt-1" for="titles"> Search titles only</label>
                        </div>
                        <!-- Default unchecked -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="image">
                            <label class="custom-control-label text-14 pt-1" for="image">Has image</label>
                        </div>
                        <!-- Default unchecked -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="today">
                            <label class="custom-control-label text-14 pt-1" for="today">Posterd today</label>
                        </div>

                        {{-- filter2 --}}
                        <div class="my-4">
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="internship">
                                <label class="custom-control-label text-14 pt-1" for="internship"> Internship</label>
                            </div>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="profit">
                                <label class="custom-control-label text-14 pt-1" for="profit">Non-profit</label>
                            </div>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="telecommute">
                                <label class="custom-control-label text-14 pt-1" for="telecommute">Telecommute</label>
                            </div>
                        </div>
                        {{-- filter3 --}}
                        <div class="my-4">
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="full">
                                <label class="custom-control-label text-14 pt-1" for="full"> Full-Time</label>
                            </div>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="part">
                                <label class="custom-control-label text-14 pt-1" for="part">Part-Time</label>
                            </div>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="contract">
                                <label class="custom-control-label text-14 pt-1" for="contract">Contract</label>
                            </div>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="telecommute">
                                <label class="custom-control-label text-14 pt-1" for="telecommute">  Employee's choice
                                </label>
                            </div>
                        </div>
                        <a href="" class="btn btn-custom shadow-none btn-md  font-weight-bold">Update search</a>


                    </div>
                    <div class="col-md-8">
                       
                        <p class="h4 mb-2 text-22 font-weight-bold"> Wanted Post</p>
                        <div class="post-image">
                            <div class="card p-2 shadow-none custom_grey ">
                                <div class="row">
                                    <div class="col-md-2 d-flex align-items-md-center">
                                        <img src="http://localhost/hispanic/public/svg/post.png " class="img img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10">
                                       
                                        <p class="text-16 font-weight-bold pb-0 mb-0">
                                            Post Title
                                        </p>
                                        <p class="text-14">
                                            It is a long established fact that a reader will be
                                            distracted by will be distracted by thed by will be distracted by the readable conte... <a href="http://localhost/hispanic/public/post-details" class="text-color font-weight-bold">
                                                More
                                            </a>
                                        </p>
                                        
                                        <ul class="list-inline m-0 p-0">
                                           
                                            <li class="list-inline-item text-14">
                                                <i class="far fa-thumbs-up "></i>  5202
                                                <i class="far fa-thumbs-down pl-2"></i>
                                               <img src="http://localhost/hispanic/public/svg/share.svg" class="pl-2" alt="">
                                                <i class="far fa-comment pl-2"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-14">
                                                    Report Abuse
                                                </p>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- post wihout image -->
                        <p class="  text-16 py-1  mt-3">
                            <span class="">
                                July 14
                            </span>
                            <span class=" text-16">
                                Looking For Python Trainers in Hyderabad
                            </span>
                            &ensp;
                                <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                &ensp;
                            <span class="color_secondary">
                                Pic
                            </span>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('svg/ads2.jpg')}}" class="img img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
