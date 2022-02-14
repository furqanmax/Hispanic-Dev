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
                                    Vacancy for Php Associate
                                </h3>
                               
                                <p class="text-14 pb-2 mb-0">
                                    Google &ensp; <span><img src="{{ asset('svg/map-pin.svg') }}" alt="" class="img img-fluid"> <b>In-office :</b>   500081,
                                        Hyderabad, Hi tech city, white fields, Kondapur</span>
                                </p>
                                <p class="text-left text-14 pb-2 mb-0">
                                    Softwere Engineer
                                </p>
                               
                            </div>
                            <div class="col-md-3 offset-1 text-14 text-right">
                                <a href="" class="btn btn-custom btn-sm btn-block shadow-none">
                                    <img src="{{ asset('svg/phone.svg') }}" alt="" class="img img-fluid">
                                  &nbsp;   7020365857
                                </a><br>
                                <a href="" class="btn btn-border btn-sm btn-block shadow-none mt-3">
                                    <img src="{{ asset('svg/mail.svg') }}" alt="" class="img img-fluid">
                                  &nbsp;   Email
                                </a>
                                
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
                            <table class="table  table-borderless  mt-3">
                                <tbody>
                                    <tr>
                                        <td scope="row" class="font-weight-bold m-0 p-0 text-14">Employment type</td>
                                        <td class="m-0 p-0 text-14">
                                            Contract
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row" class="font-weight-bold pb-3 p-0 m-0 text-14">Categories</td>
                                        <td class="pb-3 p-0 m-0 text-14">Restaurants, Asian Restaurants, Bartending Service,</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="font-weight-bold pb-3 p-0 m-0 text-14">Email</td>
                                        <td class="pb-3 p-0 m-0 text-14">hispanic@gmail.com</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            {{-- Description --}}
                            <div >
                                <p class="font-weight-bold pb-3 mb-0">
                                    Description
                                </p>
                                <p>
                                    When leading companies choose Google Cloud it's a huge win for spreading the power of cloud computing globally. Once educational institutions, government agencies, and other businesses sign on to use Google Cloud products, you come in to facilitate making their work more productive, mobile, and collaborative. You listen and deliver what is most helpful for the customer. You assist fellow sales Googlers by problem-solving key technical issues for our customers. You liaise with the product marketing management and engineering teams to stay on top of industry trends and devise enhancements to Google Cloud products.
     product marketing management and engineering teams to stay on top of industry trends and devi
                                </p>
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
