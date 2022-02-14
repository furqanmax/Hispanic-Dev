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
            Apple iPhone 13 128 GB, Midnight (Black)
        </h3>

        <p class="text-14 pb-2 mb-0">
            $ 899 | <span>Dec 03</span>
        </p>
        <p class="text-14 pb-2 mb-0">
            Karwan hyderabad telangana
        </p>
        <ul class="list-inline text-14 m-0 p-0">
                                       
            <li class="list-inline-item">
                <i class="far fa-thumbs-up "></i> 65258 
                <i class="fa fa-share-alt "></i>   
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
                            <table class="table  table-borderless   mt-3">
                                <tbody>
                                    <tr>
                                        <td scope="row" class="font-weight-bold text-14">Specifications</td>
                                        <td class="text-14">
                                            Super Retina XDR Display<br>
5G Enabled Phone<br>
A15 Bionic Chip<br>
15.4 cm (6.1 inch) all‑screen OLED Display
                                        </td>
                                    </tr>
                                    <tr >
                                        <td  class="font-weight-bold text-14">Description</td>
                                        <td class="text-14">Introducing Photographic Styles Styles are smart enough to do things like boost or mute colours while keeping skin tones natural Photographic Styles create a personal look for your photos. But unlike filters, styles selectively apply adjustments to the right areas, while preserving skin  Introducing Photographic Styles Styles are smart enough to do things like boost or mute colours while keeping skin tones natural Photographic Styles create a personal look for your photos. But unlike filters, styles selectively apply adjustments to the right areas, while preserving skin</td>
                                    </tr>
                                  
                                    
                                </tbody>
                            </table>
                            <hr>
                            {{-- Seller description --}}
                            <div class="seller-description font-weight-bold text-14">
                                <p class="">
                                    Seller Description
                                </p>
                                <div>
                                    <div class="row text-14">
                                         {{-- image --}}
                                        <div class="col-md-1 text-center">
                                            <img src="{{asset('svg/profile.png')}}" class="img img-fluid" alt="">
                                        </div>
                                        <div class="col-md-11">
                                            <p class="font-weight-bold pb-0 mb-0">
                                                Name
                                            </p>
                                            <p class="grey-color pb-0 mb-0">
                                                Email
                                            </p>
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            <hr>
                            {{-- related post --}}
                            <div class="related-post">
                                <p class="font-weight-bold">
                                    Related posts
                                </p>
                                {{-- cards --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card p-2 shadow-none custom_grey ">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{asset('svg/profile.png')}}" alt="">

                                                </div>
                                                <div class="col-md-10 ml-2">
                                                    <p class="mb-0 pb-0 font-weight-bold text-14">
                                                        Max Jack
                                                    </p>
                                                    <p class="text-12 grey-color">
                                                        Dec 01
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- title --}}
                                                <p class="text-14 font-weight-bold mb-0 pb-0">
                                                    Apple iPhone 13 128 GB, Midnight
                                                </p>
                                                <p class="text-12 grey-color">
                                                    $ 899
                                                </p>
                                                {{-- image --}}
                                                <img src="{{asset('svg/slide.png')}}" alt="">
                                                {{-- actions --}}
                                                <div class="actions mt-3">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <ul class="list-inline text-14 m-0 p-0">
                                       
                                                                <li class="list-inline-item">
                                                                    <i class="far fa-thumbs-up "></i> 65258 
                                                                    <i class="fa fa-share-alt "></i>   
                                                                    <i class="far fa-comment"></i>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="text-14 pb-0 mb-0 text-right">
                                                                Report Abuse
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card p-2 shadow-none custom_grey ">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="{{asset('svg/profile.png')}}" alt="">

                                                </div>
                                                <div class="col-md-10 ml-2">
                                                    <p class="mb-0 pb-0 font-weight-bold text-14">
                                                        Max Jack
                                                    </p>
                                                    <p class="text-12 grey-color">
                                                        Dec 01
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- title --}}
                                                <p class="text-14 font-weight-bold mb-0 pb-0">
                                                    Apple iPhone 13 128 GB, Midnight
                                                </p>
                                                <p class="text-12 grey-color">
                                                    $ 899
                                                </p>
                                                {{-- image --}}
                                                <img src="{{asset('svg/slide.png')}}" alt="">
                                                {{-- actions --}}
                                                <div class="actions mt-3">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <ul class="list-inline text-14 m-0 p-0">
                                       
                                                                <li class="list-inline-item">
                                                                    <i class="far fa-thumbs-up "></i> 65258 
                                                                    <i class="fa fa-share-alt "></i>   
                                                                    <i class="far fa-comment"></i>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="text-14 pb-0 mb-0 text-right">
                                                                Report Abuse
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <hr>
                            </div>
                            {{-- Comments --}}
                            <div class=" text-14 Comments">
                                <p class=" font-weight-bold">
                                    Comments
                                </p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-1 d-flex align-items-md-center">
                                            <img src="http://localhost/hispanic/public/svg/profile.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-11">
                                            <div class="form-group mt-0 pt-0">
                                              <label for="" class="active"></label>
                                              <textarea class="form-control text-16" name="" id="" placeholder="Add Comments" rows="2"></textarea>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-custom shadow-none btn-sm m-0 waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                {{-- replys --}}
                                <div class="text-12 mt-3">
                                    <div class="row ">
                                        <div class="col-md-1 ">
                                            <img src="http://localhost/hispanic/public/svg/profile.png" alt="" srcset="">
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
                                            <img src="http://localhost/hispanic/public/svg/thumbs-up.svg" width="14" alt="" srcset=""> 65235 
                                            <img src="http://localhost/hispanic/public/svg/thumbs-down.svg" width="14" alt="" srcset="">
                                           </p>
                                        </div>
                                       
                                    </div>
                                </div>
                                {{-- reply --}}
                                <div class="reply">
                                    <div class="form-group">
                                        <input type="text" name="" id="" class="form-control text-14 grey-color"
                                            placeholder="Reply" >
                                    </div>
                                    <button type="submit" class="btn btn-border btn-sm shadow-none">Reply</button>
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



