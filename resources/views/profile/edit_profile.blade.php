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
                            <li class="list-group-item active">Change profile</li>

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
                        Edit Profile
                     </h3>

                     {{-- edit form --}}
                     <hr>
                     <div class="row">
                         <div class="col-md-7">
                            <div class="edit-form">
                                <form action="" class="grey-color text-14">
                                    {{-- photo change --}}
                                    <div class="wrapper " style="border: none;background:#fff;width:100%;margin:0px;padding-top:0px;padding-bottom:0px;text-align:left;">
                                        <input type="file" id="file-input" accept="image/*" onchange="loadFile(event)">
                                        <label for="file-input">
                                            <img id="output" width="150" height="150" class="rounded-circle" style="display: none;" >

                                            <span>
                                                <img src="{{asset('svg/off.svg')}}"   class="" alt="">
                                            </span> 
                                        </label>
                                        <i class="fa fa-times-circle remove"></i>
                                      </div>
                                      {{--  --}}
                                   <div class="row mt-3">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold "> Name</label>
                                            <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder=" Name" aria-describedby="">
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold ">Email</label>
                                            <input type="email" name="" id="" class="form-control text-14 grey-color" placeholder="Email" aria-describedby="">
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold ">Phone Number</label>
                                            <input type="number" name="" id="" class="form-control text-14 grey-color" placeholder="+91 685 785 7885" aria-describedby="">
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                             <label for="" class="font-weight-bold">Gender</label>
                                             <select class="form-control  text-14 grey-color" name="" id="">
                                               <option>Change Gender</option>
                                               <option>Male</option>
                                               <option>Female</option>
                                             </select>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold "> Langauge</label>
                                            <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder=" English" aria-describedby="">
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold "> Location</label>
                                            <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder=" Hyderabad, India" aria-describedby="">
                                        </div>
                                       </div>
                                   </div>
                                   {{-- buttons --}}
                                   <div class="row">
                                       <div class="col-md-6">
                                        <a href="" class="btn btn-border font-weight-bold text-color btn-md btn-block shadow-none waves-effect waves-light">Back To Home</a>

                                       </div>
                                       <div class="col-md-6">
                                        <a href="" class="btn btn-custom font-weight-bold  btn-md btn-block shadow-none waves-effect waves-light">Save</a>
                                       </div>
                                   </div>
                                </form>
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
