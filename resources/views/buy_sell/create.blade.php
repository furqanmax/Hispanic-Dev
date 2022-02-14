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
                            <li class="list-group-item active">Buy & Sell</li>
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
                        Selling
                    </h3>

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
                            {{-- post title --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Set a Price title</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color"
                                        placeholder="Enter Title ">
                                </div>
                            </div>
                            {{-- Set a Price --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class=" font-weight-bold">Set a Price</label>
                                    <input type="number" name="" id="" class="form-control text-14 grey-color"
                                        placeholder="Enter Price ">
                                </div>
                            </div>
                            {{-- Specification --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Specification</label>
                                    <input type="text" class="form-control text-14 grey-color">
                                </div>
                            </div>
                            {{-- Tags --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tags</label>
                                    <input type="text" class="form-control text-14 grey-color" placeholder="">
                                </div>
                            </div>
                            {{-- Phone number --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Phone number</label>
                                    <input type="text" class="form-control text-14 grey-color" placeholder="Enter Number">
                                </div>
                            </div>
                            {{-- Email --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Email</label>
                                    <input type="email" class="form-control text-14 grey-color" placeholder="Enter Email">
                                </div>
                            </div>
                            {{-- location --}}
                            <div class="col-md-6">
                                <a href="" class="btn btn-custom btn-block btn-sm shadow-none">Enter Address</a>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="btn btn-border btn-block btn-sm shadow-none">Current Location</a>
                            </div>
                            {{-- state --}}
                            <div class="col-md-6 mt-3">
                                <div class="form-group ">
                                    <label for="" class="text-14 grey-color font-weight-bold">State</label>
                                    <select class="form-control text-14 grey-color" name="" id="">
                                        <option>Select State</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>

                            </div>
                            {{-- province --}}
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Province</label>
                                    <input type="text" class="form-control text-14 grey-color" placeholder="Enter province">
                                </div>
                            </div>
                            {{-- Neighbourhood --}}
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Neighbourhood</label>
                                <input type="text" class="form-control text-14 grey-color"
                                    placeholder="Enter Neighbourhood">
                            </div>
                        </div>
                        {{-- textarea --}}
                        <textarea name="editor1" id="editor1" rows="5" class=""
                            style="visibility: hidden; display: none;"></textarea>

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
                    {{-- detail --}}
                    <div class="row">
                        <div class="col-md-8">
                            {{-- event --}}
                            <h3 class="text-22 font-weight-bold">
                                Apple iPhone 13 128 GB, Midnight (Black)
                            </h3>

                            <p class="text-14 pb-2 mb-0">
                                $ 899 | <span>Dec 03</span>
                            </p>
                            <p class="text-14 pb-2 mb-0">
                                Karwan hyderabad telangana
                            </p>
                            
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
                    <hr>
                    {{-- sliders --}}
                    <p class="font-weight-bold mt-3">
                         Videos & images
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
                        <table class="table  table-borderless text-14 mt-3">
                            <tbody>
                                <tr>
                                    <td scope="row" class="font-weight-bold ">Specifications</td>
                                    <td class="">
                                        Super Retina XDR Display<br>
                                        5G Enabled Phone<br>
                                        A15 Bionic Chip<br>
                                        15.4 cm (6.1 inch) all‑screen OLED Display
                                    </td>
                                </tr>
                                <tr >
                                    <td class="font-weight-bold">Description</td>
                                    <td class="">
                                        When leading companies choose Google Cloud it's a huge win for spreading the power of cloud
                                        computing globally. Once educational institutions, government agencies, and other businesses
                                        sign on to use Google Cloud products, you come in to facilitate making their work more
                                        productive, mobile, and collaborative. You listen and deliver what is most helpful for the
                                        customer. You assist fellow sales Googlers by problem-solving key technical issues for our
                                        customers. You liaise with the product marketing management and engineering teams to stay on top
                                        of industry trends and devise enhancements to Google Cloud products.
                                        product marketing management and engineering teams to stay on top of industry trends and devis
                                        product marketing management and engineering teams to stay on top of industry trends and devise
                                        enhancements to Goog
                                    </td>
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
