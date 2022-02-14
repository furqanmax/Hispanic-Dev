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
                    <h3 class="text-22 font-weight-bold">
                       Create Yellow Page
                    </h3>
                   
                    {{-- create ecvent form --}}
                    <form action="" class=" grey-color text-14 mt-3">
                        {{-- add images --}}
                        <div class="wrapper ">
                            <input type="file" id="file-input" multiple>
                            <label for="file-input">
                                <i class="fa fa-plus"></i>
                                <span>Add </span>
                            </label>
                            <i class="fa fa-times-circle remove"></i>
                        </div>
                        <h3 class="font-weight-bold text-color text-22">
                            Basic Business Informarion
                        </h3>
                        <hr>

                        {{--  --}}
                        <div class="row ">
                            {{-- Business Phone  --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Business Phone</label>
                                    <input type="number" name="" id="" class="form-control text-14 grey-color"
                                        placeholder="Buisness Phone" aria-describedby="helpId">
                                </div>
                            </div>
                            {{-- Business Name --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Business Name</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color"
                                        placeholder="Buisness Name" aria-describedby="">
                                </div>
                            </div>
                            {{-- Business Owner Full Name --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Business Owner Full Name</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color"
                                        placeholder=" Owner Full Name" aria-describedby="">
                                </div>
                            </div>
                        </div>
                        {{-- date --}}
                        <div class="row">
                            {{-- Business Email --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Business Email</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color"
                                        placeholder=" Business Email" aria-describedby="">
                                </div>   
                            </div>
                            {{-- Categories that describe --}}
                            <div class="col-md-3 ">
                                <div class="form-group">
                                  <label for="" class="font-weight-bold">Business Catogry</label>
                                  <select class="form-control custom-select grey-color text-14" name="" id="">
                                    <option>Your Business</option>
                                    <option></option>
                                  </select>
                                </div>
                            </div>
                            {{--Business Website --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Business Website</label>
                                    <input type="text" class="form-control text-14 grey-color" placeholder="Website link">
                                </div> 
                            </div>
                            {{--videolink --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Business Video</label>
                                    <input type="text" class="form-control text-14 grey-color" placeholder="Video link">
                                </div> 
                            </div>
                            
                           
                        </div>
                        {{-- Street address--}}
                        <div class="row">
                            {{-- Street address --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Street address</label>
                                    <input type="text" class="form-control text-14 grey-color" placeholder="Address">
                                </div> 
                               
                            </div>
                            {{-- zip code --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="" class="font-weight-bold">Zip code</label>
                                  <input type="text" class="form-control text-14 grey-color" name="" id=""  placeholder="+578578">
                                </div>
                            </div>    
                            {{-- City --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="" class="font-weight-bold">City</label>
                                  <input type="text" class="form-control text-14 grey-color" name="" id=""  placeholder="City">
                                </div>
                            </div> 
                            {{-- state --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">State</label>
                                    <select class="form-control custom-select grey-color text-14" name="" id="">
                                      <option>Maharashtra</option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            
                        </div>
                        {{-- Year Established --}}
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Year Established</label>
                            <input type="text" class="form-control text-14 grey-color" name="" id=""  placeholder="2021">
                          </div>
                        
                        {{-- textarea --}}
                        <textarea name="editor1" id="editor1" rows="5" class="" style="visibility: hidden; display: none;"></textarea>
                        
                        {{-- visiting your business --}}
                        <h3 class="font-weight-bold text-color text-22 mt-3">
                            Visiting your Business
                        </h3>
                        <hr>
                        <p class="font-weight-bold">
                            Weekdays
                            
                        </p>
                        {{-- opens --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Open</label>
                                    <input type="time" class="form-control text-14 grey-color" placeholder="Choose Time">
                                </div>
                            </div>
                            <div class="col-md-1 ">
                                <p class="text-center pt-3 font-weight-bold">
                                    To
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Close</label>
                                    <input type="time" class="form-control text-14 grey-color" placeholder="Choose Time">
                                </div>
                            </div>
                            <div class="col-md-1 d-flex align-items-center">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                    Closes
                                  </label>
                                </div>
                            </div>
                        </div>
                        <p>
                            + Add different times for each weekday
                        </p>

                    </form>

                    {{-- preview and post --}}
                    <div class="mt-3">
                        <div class="row ">
                            <div class="col-md-6">
                                <a href=""
                                    class="btn btn-border font-weight-bold  btn-md btn-block shadow-none waves-effect waves-light"
                                    data-toggle="modal" data-target="#eventmodal">Priview</a>
                            </div>
                            <div class="col-md-6">
                                <a href=""
                                    class="btn btn-custom font-weight-bold  btn-md btn-block shadow-none waves-effect waves-light">Post</a>

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

    {{--  --}}
    <!-- Priview  -->
    <div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered -0 p-0" role="document">


            <div class="modal-content">

                <div class="modal-body">
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
                    <i class="far fa-clock pr-1 "></i> OPEN NOW <span class="text-14">&ensp; Today: 11:00 am - 10:30 pm</span>
                </p>
                       </div>
                       <div class="col-md-4 text-14">
                           <p class="pb-2 mb-0">
                              <img src="{{asset('svg/phone.svg')}}" alt="" class="img img-fluid">&nbsp; <b class="font-weight-bold">+61 2578 8577</b>
                           </p>
                           <p class="pb-2 mb-0">
                            <img src="{{asset('svg/map-pin.svg')}}" alt="" class="img img-fluid">&nbsp; 500081, Hyderabad, Hi tech city, white fields, Kondapur
                           </p>
                       </div>
                   </div>
                   <hr>
                   {{-- sliders --}}
                   <p class="font-weight-bold mt-3">
                    Featured Videos & images
                   </p>
                   {{-- sliders --}}
                   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">
                      </div>
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
                      </div>
                    </div>
                  </div>
                  {{-- description --}}
                  <div>
                      {{-- <h3 class="text-22 my-3 pb-0">
                        Dine In - Take Out - Delivery - Catering

                      </h3> --}}
                      <table class="table  table-borderless text-14" >
                          <tbody >
                              <tr>
                                  <td scope="row" class="font-weight-bold" >Open Hours</td>
                                  <td>
                                      <p class="">
                                        Regular Hours
                                      </p>
                                     <ul class="list-inline">
                                         <li class="list-inline-item">Mon - Sun:</li>
                                         <li class="list-inline-item">11:00 am - 10:30 pm                                        </li>
                                        
                                     </ul>
                                     <ul class="list-inline mb-0 pb-0">
                                         <li class="list-inline-item">Sunday</li>
                                         <li class="list-inline-item">Closed</li>
                                     </ul>
                                  </td>
                                  <td></td>
                              </tr>
                              <tr class="">
                                  <td scope="row" class="font-weight-bold">Youtube Link</td>
                                  <td>https://www.youtube.com/businesswebsite</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">Website Link</td>
                                  <td>https://www.businesswebsite.com</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Categories</td>
                                <td>Restaurants, Asian Restaurants, Bartending Service,</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Email</td>
                                <td>Hispanic@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Description</td>
                                <td>Vegetarian Friendly, Vegan Options,</td>
                            </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center m-auto">
                        <button type="button" class="btn btn-custom font-weight-bold shadow-none btn-sm">Edit</button>
                        <button type="button" class="btn btn-border font-weight-bold shadow-none btn-sm">Pay And
                            Post</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
