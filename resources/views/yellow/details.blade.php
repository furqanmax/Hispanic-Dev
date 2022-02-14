@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section class="my-3">
        <div class="container-fluid">
            <div class="row m-0 p-0">

                <div class="col-md-8 offset-md-2">
                    <div class="card custom_grey shadow-none p-3">
                        {{-- detail --}}
                        <div class="row">
                            <div class="col-md-8">
                                {{-- event --}}
                                <h3 class="text-22 font-weight-bold">
                                    Kung Fu Thai & Chinese Restaurant﻿
                                </h3>
                                <ul class="list-inline text-14">
                                    <li class="list-inline-item">Restaurants,</li>
                                    <li class="list-inline-item">Asian Restaurants,</li>
                                    <li class="list-inline-item"></li>
                                </ul>
                                <p class="text-14 pb-2 mb-0">
                                    <b class="font-weight-bold">19</b> YEARS IN BUSINESS
                                </p>
                                <p class="text-left pb-2 mb-0">
                                    <i class="far fa-clock pr-1 "></i> OPEN NOW <span class="text-14">&ensp; Today:
                                        11:00 am - 10:30 pm</span>
                                </p>
                                <ul class="list-inline m-0 p-0">
                                   
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
                            <div class="col-md-4 text-14">
                                <p class="pb-2 mb-0">
                                    <img src="{{ asset('svg/phone.svg') }}" alt="" class="img img-fluid">&nbsp; <b
                                        class="font-weight-bold">+61 2578 8577</b>
                                </p>
                                <p class="pb-2 mb-0">
                                    <img src="{{ asset('svg/map-pin.svg') }}" alt="" class="img img-fluid">&nbsp; 500081,
                                    Hyderabad, Hi tech city, white fields, Kondapur
                                </p>
                            </div>
                        </div>
                        
                        </div>
                        <div class="card shadow-none custom_grey p-3 mt-3">
                            {{-- sliders --}}
                        <p class="font-weight-bold ">
                            Featured Videos & images
                        </p>
                        {{-- sliders --}}
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">
                                </div>
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
                                </div>
                            </div>
                        </div>
                        {{-- description --}}
                        <div>
                            {{-- <h3 class="text-22 my-3 pb-0">
                     Dine In - Take Out - Delivery - Catering

                   </h3> --}}
                            <table class="table  table-borderless text-14">
                                <tbody>
                                    <tr>
                                        <td scope="row" class="font-weight-bold">Open Hours</td>
                                        <td>
                                            <p class="">
                                                Regular Hours
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">Mon - Sun:</li>
                                                <li class="list-inline-item">11:00 am - 10:30 pm </li>

                                            </ul>
                                            <ul class="list-inline mb-0 pb-0">
                                                <li class="list-inline-item">Sunday</li>
                                                <li class="list-inline-item">Closed</li>
                                            </ul>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row" class="font-weight-bold pb-3 p-0 m-0">Youtube Link</td>
                                        <td class="pb-3 p-0 m-0">https://www.youtube.com/businesswebsite</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold p-0 m-0">Website Link</td>
                                        <td class="m-0 pb-3 p-0">https://www.businesswebsite.com</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pb-3 p-0 m-0">Categories</td>
                                        <td class="pb-3 p-0 m-0">Restaurants, Asian Restaurants, Bartending Service,</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pb-3 p-0 m-0">Email</td>
                                        <td class="pb-3 p-0 m-0">Hispanic@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pb-3 p-0 m-0">Description</td>
                                        <td class="pb-3 p-0 m-0">Vegetarian Friendly, Vegan Options,</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                         {{-- comments --}}
                         <div>
                             
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
                         </div>
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
                <div class="col-md-2 text-center">
                    <img src="{{ asset('svg/ads2.jpg') }}" class="img img-fluid" style="height: 700px;" alt="">
                </div>
            </div>
        </div>
    </section>




@endsection
