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
                        <li class="list-group-item active">My Jobs</li>
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
                        Job Posting
                    </h3>
                    
                    {{-- job posting form --}}
                   <form action="" class="grey-color text-14 mt-4">
                       {{-- add images --}}
                       <div class="wrapper ">
                        <input type="file" id="file-input" >
                        <label for="file-input">
                            <i class="fa fa-plus"></i>
                            <span>Add </span>
                        </label>
                        <i class="fa fa-times-circle remove"></i>
                    </div>
                        {{-- category --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Please choose a category</label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Choose category</option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- post title --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Posting Title</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder="Name" >
                                </div>
                            </div>
                            {{-- employment type --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Employment type
                                    </label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Employment type
                                    </option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- job type --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Job type

                                    </label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Job type

                                    </option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- compensation --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Compensation</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder="Describe Compensation" >
                                </div>
                            </div>
                            {{-- company name --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Company name

                                    </label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Company name

                                    </option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- zip code --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Zip code</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder="65898 698578" >
                                </div>
                            </div>
                            {{-- city --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">City</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder="Enter City" >
                                </div>
                            </div>
                        {{-- state --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">State

                                    </label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Maharashtra

                                    </option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- email --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Email</label>
                                    <input type="email" name="" id="" class="form-control text-14 grey-color" placeholder="Email" >
                                </div>
                            </div>
                            {{--Email privacy options  --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Email privacy options

                                    </label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Select email

                                    </option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- phone number --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Phone number</label>
                                    <input type="number" name="" id="" class="form-control text-14 grey-color" placeholder="Enter phone number" >
                                </div>
                            </div>
                            {{-- phone number type --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Phone number type

                                    </label>
                                    <select class="form-control custom-select text-14 grey-color" name="" id="">
                                      <option>Phone Type

                                    </option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                            </div>
                            {{-- extenion --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Extenion</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder="extenion" >
                                </div>
                            </div>
                            {{-- contact name --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold ">Contact name</label>
                                    <input type="text" name="" id="" class="form-control text-14 grey-color" placeholder="contact name" >
                                </div>
                            </div>
    
                        </div>
                        {{-- confirm check --}}
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                            ok to highlight this job opening for persons with disabilities
                          </label>
                        </div>
                        {{-- textarea --}}
                        <textarea  name="editor1" id="editor1" ></textarea>
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
            Vacancy for Php Associate
           </h3>
           
           <p class="text-14 pb-2 mb-0">
               Google
           </p>
           <p class="text-left pb-2 mb-0">
            Softwere Engineer
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
              <table class="table  table-borderless text-14 mt-3" >
                  <tbody >
                      <tr>
                          <td scope="row" class="font-weight-bold m-0 p-0" >Employment type</td>
                          <td class="m-0 p-0">
                            Contract
                          </td>
                          <td></td>
                      </tr>
                      <tr class="">
                          <td  class="font-weight-bold m-0 p-0">Categories</td>
                          <td class="m-0 pb-0">Restaurants, Asian Restaurants, Bartending Service,</td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold m-0 p-0">Email</td>
                          <td class="m-0 p-0">hispanic@gmail.com</td>
                      </tr>
                      
                  </tbody>
              </table>
              <p class="font-weight-bold">
                  Description
              </p>
              <p>
                When leading companies choose Google Cloud it's a huge win for spreading the power of cloud computing globally. Once educational institutions, government agencies, and other businesses sign on to use Google Cloud products, you come in to facilitate making their work more productive, mobile, and collaborative. You listen and deliver what is most helpful for the customer. You assist fellow sales Googlers by problem-solving key technical issues for our customers. You liaise with the product marketing management and engineering teams to stay on top of industry trends and devise enhancements to Google Cloud products.
                product marketing management and engineering teams to stay on top of industry trends and devis
               product marketing management and engineering teams to stay on top of industry trends and devise enhancements to Goog
              </p>
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
