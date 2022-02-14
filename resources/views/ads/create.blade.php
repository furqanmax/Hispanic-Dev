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
                        <a href="{{route('my.add')}}"  class="text-color ">
                        <li class="list-group-item active">My Ads</li>
                            
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
                    <h3 class="text-22 font-weight-bold mb-0 pb-2">
                        Create Post Ad
                    </h3>
                    {{-- <p class="text-14">
                        Featured Images
                    </p> --}}
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
                        {{-- contact-information --}}
                        <div class="contact-information">
                            <p class="text-22 font-weight-bold">
                                Contact Information
                            </p>
                            <hr>
                            {{-- contact information --}}
                            <div class="row ">
                                {{-- Contact person --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class=" font-weight-bold">Contact Person</label>
                                        <input type="text" name="" id="" class="form-control text-14 grey-color"
                                            placeholder="Name" aria-describedby="helpId">
                                    </div>
                                </div>
                                {{-- Phone Number --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class=" font-weight-bold">Phone Number</label>
                                        <input type="number" name="" id="" class="form-control text-14 grey-color"
                                            placeholder="Phone Number" aria-describedby="helpId">
                                    </div>
                                </div>
                                {{-- email --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class=" font-weight-bold">Email</label>
                                        <input type="email" name="" id="" class="form-control text-14 grey-color"
                                            placeholder="Email" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- information --}}
                        <div class="item-information">
                            <p class="text-22 font-weight-bold">
                                Item Information
                            </p>
                            <hr>
                            {{-- title --}}
                            <div class="row">
                                {{-- title --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="font-weight-bold">Title</label>
                                        <input type="text" class="form-control text-14 grey-color" id="" name="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="font-weight-bold">Select ad category</label>
                                        <select class="form-control grey-color text-14" name="" id="">
                                            <option>Choose a gategory</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="font-weight-bold">Price</label>
                                        <input type="number" class="form-control text-14 grey-color" id="" name=""
                                            placeholder="$">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- textarea --}}
                        <textarea name="editor1" id="editor1" rows="5" class=""
                            style="visibility: hidden; display: none;"></textarea>
                        {{-- address --}}
                        <div class="row mt-3">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold active">Zip code</label>
                                    <input type="text" class="form-control text-14 grey-color" name="" id=""
                                        placeholder="+578578">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold active">City</label>
                                    <input type="text" class="form-control text-14 grey-color" name="" id=""
                                        placeholder="City">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">State</label>
                                    <select class="form-control custom-select grey-color text-14" name="" id="">
                                        <option>Maharashtra</option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <hr>
                        {{-- Listing Information --}}
                        <div class="listing-information">
                            <p class="text-22 font-weight-bold">
                                Listing Information
                            </p>
                            <hr>
                            <div class="row text-14">
                                <div class="col-md-6">
                                    <p class="font-weight-bold">
                                        Paid
                                    </p>
                                    <!-- paid -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="paid"
                                            name="plan">
                                        <label class="custom-control-label" for="paid">
                                            <i class="far fa-clock  text-color  "></i> &ensp;Visible 30 days | <img src="{{asset('svg/flag.svg')}}" alt=""> Featured <br>
                                            <i class="fa fa-exclamation-circle text-color" aria-hidden="true"></i>
                                            &ensp;Pour particulier<br>
                                            <span class="badge badge-success text-16 px-4   shadow-none mt-3">$10.00</span>
                                        </label>
                                    </div>
                                    <div class="form-group mt-3">
                                      
                                      <select class=" form-control custom-select grey-color text-14" name="" id="">
                                        <option>Select option</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                        <option>Half larg</option>
                                        <option>Full larg</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="font-weight-bold">
                                        Free Ad
                                    </p>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="free" name="plan" >
                                        <label class="custom-control-label" for="free"> <i class="far fa-clock  text-color  "></i> &ensp;Visible 15 days <br>
                                            <span class="badge badg-expire text-16 px-4   shadow-none mt-3">FREE</span>
                                        
                                        </label>
                                      </div>
                                </div>
                            </div>
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


    {{--  --}}
   
    

@endsection
