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
                      <a href="{{route('add.new.post')}}" >
                          <li class="list-group-item  active ">Add New Post</li>
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
                    <h3 class="text-22 font-weight-bold mb-3">
                        Add New Post
                    </h3>
                        <form action="" class="text-14">
                          <div class="wrapper ">
                            <input type="file" id="file-input">
                            <label for="file-input">
                              <i class="fa fa-plus"></i>
                              <span>Add </span>
                            </label>
                            <i class="fa fa-times-circle remove"></i>
                          </div>
                            <select class="form-control text-14 grey-color">
                                <option selected>Select Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            <select class="form-control text-14 grey-color mt-3">
                                <option selected>Sub Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                              <select class="form-control text-14 grey-color mt-3">
                                <option selected>Post Type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
    
                              <input class="form-control my-3 form-control-sm" type="text" placeholder="Post Title">
                              {{-- EDITOR    --}}
                              <textarea name="editor1" id="editor1" rows="5" class="" ></textarea>

                              <div class="row mt-3">
                                  <div class="col-md-6">
                                    <a href="" class="btn btn-border font-weight-bold  btn-md btn-block shadow-none" data-toggle="modal" data-target="#exampleModalCenter">Priview</a>
                                  </div>
                                  <div class="col-md-6">
                                    <a href="" class="btn btn-custom font-weight-bold  btn-md btn-block shadow-none" >Post</a>

                                  </div>
                              </div>
                        </form>



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
    <div class="modal-dialog modal-lg modal-dialog-centered -0 p-0" role="document">
  
  
      <div class="modal-content">
        <div class="modal-header m-0 p-0">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
              </div>
            </div>
          </div>
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
          <button type="button" class="btn btn-custom font-weight-bold shadow-none" data-dismiss="modal">Confirm</button>
          <button type="button" class="btn btn-border font-weight-bold shadow-none">Confirm And Post</button>
        </div>
      </div>
    </div>
  </div>



@endsection
