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
                        <a href="{{route('profile')}}">
                            <li class="list-group-item active">My Posts</li>

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
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h3 class="text-22 font-weight-bold">
                                My Posts
                            </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="list-inline mb-0 pb-0">
                                <li class="list-inline-item">
                                    <div class="input-group md-form form-sm form-2 pl-0">
                                        <input class="form-control my-0 py-1 input red-border" type="text" placeholder="Search"
                                            aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn-custom"   id="basic-text1" style="background:#addfc6;"><i
                                                    class="fas fa-search " aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <img src="{{ asset('svg/bar-chart.svg') }}" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" alt="" srcset="">



                                <div class="dropdown-menu yellow_page p-3 ">
                                    <p class="font-weight-bold">
                                        Sort By Posts
                                    </p>
                                    <div class=" mb-0 pb-0" href="#">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                Newst
                                            </label>
                                        </div>
                                    </div>
                                    <div class=" pb-0 mb-0" href="#">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                Oldest
                                            </label>
                                        </div>
                                    </div>

                                </div>                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- tabs --}}
                    <div class="tabs">
                        <ul class="nav nav-tabs m-0 p-0" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link px-3 badge active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                aria-selected="true">most recent</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link px-3 badge" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                aria-selected="false">active</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link px-3 badge" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                aria-selected="false">inactive</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 badge" id="postings-tab" data-toggle="tab" href="#postings" role="tab" aria-controls="posting"
                                  aria-selected="false"> all postings</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link px-3 badge" id="wanted-tab" data-toggle="tab" href="#wanted" role="tab" aria-controls="wanted"
                                  aria-selected="false">Wanted</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link px-3 badge" id="sellbuy-tab" data-toggle="tab" href="#sellbuy" role="tab" aria-controls="sellbuy"
                                  aria-selected="false">Sell\Buy</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link px-3 badge" id="classified-tab" data-toggle="tab" href="#classified" role="tab" aria-controls="classified"
                                  aria-selected="false">classified</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link badge" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events"
                                  aria-selected="false">Events</a>
                              </li>
                              
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane mt-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="posts">
                                    {{-- post with image --}}
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
                                                        distracted by will be distracted by thed by will be distracted by the readable conte... <a href="{{route('post.details')}}" class="text-color font-weight-bold">
                                                            More
                                                        </a>
                                                    </p>
                                                    
                                                    <ul class="list-inline m-0 p-0">
                                                       
                                                        <li class="list-inline-item text-14">
                                                            <i class="far fa-thumbs-up "></i>&ensp; 5202
                                                            <i class="far fa-thumbs-down pl-2"></i>
                                                           <img src="{{asset('svg/share.svg')}}" class="pl-2" alt="">
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
                                    {{-- post-wihout image --}}
                                    <div class="post-without-image my-3">
                                        <div class="card p-3 shadow-none custom_grey ">
                                            <div class="row">
                                               
                                                <div class="col-md-10">
                                                   
                                                    <p class="text-16 font-weight-bold pb-0 mb-0">
                                                        Post Title
                                                    </p>
                                                    <p class="text-14">
                                                        It is a long established fact that a reader will be
                                                        distracted by will be distracted by thed by will be distracted by the readable conte... <a href="{{route('post.details')}}" class="text-color font-weight-bold">
                                                            More
                                                        </a>
                                                    </p>
                                                    
                                                    <ul class="list-inline m-0 p-0">
                                                       
                                                        <li class="list-inline-item text-14">
                                                            <i class="far fa-thumbs-up "></i>&ensp; 5202
                                                            <i class="far fa-thumbs-down pl-2"></i>
                                                           <img src="{{asset('svg/share.svg')}}" class="pl-2" alt="">
                                                            <i class="far fa-comment pl-2"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="text-14 pb-0 mb-0">
                                                                Report Abuse
                                                            </p>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <p class="  text-16 py-2  m-0">
                                        <span class="">
                                            July 14
                                        </span>
                                        <span class=" text-16">
                                            It is a long established fact that a reader will be distracted by will be distracted by the readable conte...More
                                        </span>
                                        &ensp;
                                            <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                            &ensp;
                                        <span class="color_secondary">
                                            Pic
                                        </span>
                                    </p>
                                    <p class="  text-16 py-2  m-0">
                                        <span class="">
                                            July 14
                                        </span>
                                        <span class=" text-16">
                                            It is a long established fact that a reader will be distracted by will be distracted by the readable conte...More
                                        </span>
                                        &ensp;
                                            <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                            &ensp;
                                        <span class="color_secondary">
                                            Pic
                                        </span>
                                    </p>
                                    
                                    <p class="  text-16 py-2  m-0">
                                        <span class="">
                                            July 14
                                        </span>
                                        <span class=" text-16">
                                            It is a long established fact that a reader will be distracted by will be distracted by the readable conte... <a href="{{route('post.details')}}" class="text-color font-weight-bold">
                                                More
                                            </a>
                                        </span>
                                        &ensp;
                                            <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                            &ensp;
                                        <span class="color_secondary">
                                            Pic
                                        </span>
                                    </p>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                            </div>
                          </div>
                    </div>
                     



                   </div>
                <div class="col-md-2 text-center">
                    <img src="{{asset('svg/ads2.jpg')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
  
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered -0 p-0" role="document">
  
  
      <div class="modal-content">
        <div class="modal-header m-0 p-0">
        <img src="{{asset('svg/Rectangle.png')}}" class="img img-fluid" alt="">
        </div>
        <div class="modal-body">
          <p class="text-14 m-0 pb-1">
            06-23-2021
          </p>
          <h3 class="text-18">
            Post Title
          </h3>
          <ul class="list-inline list-post text-16">
              <li class="list-inline-item">
                Post type  
              </li>
              <li class="list-inline-item">
                Category
              </li>
              <li class="list-inline-item">
               Sub Category 
              </li>
          </ul>
          <p class="text-16">
            It is a long established fact that a reader will be distracted by will be distracted by the readable conte It is a long established fact that a reader will be distracted by will be distracted by the readable conte. It is a long established fact that a reader will be distracted by will be distracted by the readable conte...More
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



@endsection
