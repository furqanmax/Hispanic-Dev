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
                    <h3 class="text-22 font-weight-bold mb-0 pb-2">
                        Create an event
                    </h3>
                    <p class="text-14">
                        Featured Images
                    </p>
                    {{-- create ecvent form --}}
                    <form action="" class="grey-color text-14">
                        {{-- add images --}}
                        <div class="wrapper ">
                            <input type="file" id="file-input" multiple>
                            <label for="file-input">
                                <i class="fa fa-plus"></i>
                                <span>Add </span>
                            </label>
                            <i class="fa fa-times-circle remove"></i>
                        </div>
                        <hr>
                        {{--  --}}
                        <div class="row ">
                            {{-- event name --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Event Name</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color"
                                        placeholder="Name" aria-describedby="helpId">
                                </div>
                            </div>
                            {{-- Duration --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Duration</label>
                                    <select class="form-control text-14 grey-color" name="" id="">
                                        <option class=" ">Select Duration</option>
                                        <option>2hours</option>
                                        <option>3hours</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- date --}}
                        <div class="row">
                            {{-- start date --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Start Date</label>
                                    <input type="date" class="form-control text-14 grey-color">
                                </div>    
                            </div>
                            {{--satrt time --}}
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Start Time</label>
                                    <input type="time" class="form-control text-14 grey-color" placeholder="">
                                </div> 
                            </div>
                            <div class="col-md-1 d-flex align-items-sm-center font-weight-bold">
                                <p class="text-center ">
                                    To
                                </p>
                            </div>
                            {{-- end date --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">End Date</label>
                                    <input type="date" class="form-control text-14 grey-color">
                                </div> 
                            </div>
                            {{-- endtime --}}
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">End Time</label>
                                    <input type="time" class="form-control text-14 grey-color" placeholder="">
                                </div> 
                            </div>
                        </div>
                        {{-- timezone  / location--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Time Zone</label>
                                    <select class="form-control text-14 grey-color" name="" id="">
                                        <option class=" ">Select Time Zone</option>
                                        <option>(GMT -4:00) Eastern Time (Us)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            {{-- loction --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="" class="font-weight-bold">Location/Event Link</label>
                                  <input type="text" class="form-control text-14 grey-color" name="" id=""  placeholder="Location/Zoom Link">
                                </div>
                            </div>                            
                        </div>
                        {{-- organizer name / email --}}
                        <div class="row">
                            {{-- name --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Organizer Name</label>
                                    <input type="text" class="form-control text-14 grey-color" name="" id=""  placeholder="Full Name">
                                  </div>
                            </div>
                            {{-- email --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Organizer Name</label>
                                    <input type="mail" class="form-control text-14 grey-color" name="" id=""  placeholder="Location">
                                  </div>
                            </div>
                        </div>
                        {{-- textarea --}}
                        <textarea name="editor1" id="editor1" rows="5" class="" style="visibility: hidden; display: none;"></textarea>
                        {{-- event posted --}}
                        <div class="form-group mt-3">
                          <label for="" class=" font-weight-bold">Events posted by </label>
                          <select class="form-control text-14 grey-color" name="" id="">
                            <option>Buisness</option>
                            <option></option>
                            <option></option>
                          </select>
                        </div>


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
    <!-- Modal -->
    <div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered -0 p-0" role="document">


            <div class="modal-content">

                <div class="modal-body">
                    {{-- event --}}
                    <div class="row">
                        {{-- image --}}
                        <div class="col-md-2 d-flex align-items-sm-center">
                            <img src="{{ asset('svg/post.png') }}" class="img img-fluid" alt="" srcset="">
                        </div>
                        {{-- content --}}
                        <div class="col-md-10">
                            <p class="text-14 m-0 pb-2">
                                FRI, OCT 22, 21 @5:30 PM IST
                            </p>
                            <h3 class="text-18 font-weight-bold">
                                Blockchain Tech Elrond and Layer 1 Projects

                            </h3>
                            <p class="text-16 pb-1 mb-0">
                                Blockchain and Cryptocurrency Enthusiasts </p>
                            <ul class="list-inline list-post text-16">
                                <li class="list-inline-item">
                                    Elrond
                                </li>

                                <li class="list-inline-item">
                                    . &nbsp; Hyderabd
                                </li>

                            </ul>
                        </div>
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
