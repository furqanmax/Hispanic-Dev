@extends('layouts.layout')
@section('content')
    {{-- slider --}}


    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-slide" data-ride="carousel">
        <!--Indicators-->
        {{-- <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol> --}}
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('svg/slider2.png') }}" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slider swith information about options


                    </h3>
                    <h3 class="h3-responsive">

                        Control deslizante con información sobre opciones
                    </h3>

                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('svg/slider2.png') }}" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('svg/slider2.png') }}" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    {{-- conent --}}
    <section>
        <div class="container-fluid  my-3">
            <div class="row m-0 p-0">
                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card  shadow-none">
                        <div class="card-header py-2 ">
                            <h4 class=" m-0 p-0  font-weight-bold text-16" style="color: #151D22;"><a>Wanted</a></h4>

                        </div>

                        <!-- Card content -->
                        <div class="custom-body  card-body py-2" >

                            <!-- Title -->
                            <!-- Text -->
                            <a href="{{ route('post.details')}}" class=" text-13">
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
                                </span>
                                &ensp;
                                    <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                    &ensp;
                                <span class="color_secondary">
                                    Pic
                                </span>
                            </p>
                            </a>
                            <hr class="m-0">
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
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
                    <!-- Card -->
                </div>
                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card  shadow-none">
                        <div class="card-header py-2 ">
                            <h4 class=" m-0 p-0  font-weight-bold text-16"><a>Classified</a></h4>

                        </div>

                        <!-- Card content -->
                        <div class="custom-body  card-body py-2" >

                            <!-- Title -->
                            <!-- Text -->
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
                                </span>
                                &ensp;
                                    <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                    &ensp;
                                <span class="color_secondary">
                                    Pic
                                </span>
                            </p>
                            <hr class="m-0 ">
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
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
                    <!-- Card -->
                </div>
                <div class="col-md-6 mt-2">
                    <!-- Card -->
                    <div class="card  shadow-none">
                        <div class="card-header py-2 ">
                            <h4 class=" m-0 p-0  font-weight-bold text-16"><a>Sell/Buy</a></h4>

                        </div>

                        <!-- Card content -->
                        <div class="custom-body  card-body py-2" >

                            <!-- Title -->
                            <!-- Text -->
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
                                </span>
                                &ensp;
                                    <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                    &ensp;
                                <span class="color_secondary">
                                    Pic
                                </span>
                            </p>
                            <hr class="m-0">
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
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
                    <!-- Card -->
                </div>
                <div class="col-md-6 mt-2">
                    <!-- Card -->
                    <div class="card  shadow-none">
                        <div class="card-header py-2 ">
                            <h4 class=" m-0 p-0  font-weight-bold text-16"><a>Events</a></h4>

                        </div>

                        <!-- Card content -->
                        <div class="custom-body  card-body py-2" >

                            <!-- Title -->
                            <!-- Text -->
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
                                </span>
                                &ensp;
                                    <span class="badge  btn-custom shadow-none px-2 py-1">  Rs 1200</span>
                                    &ensp;
                                <span class="color_secondary">
                                    Pic
                                </span>
                            </p>
                            <hr class="m-0">
                            <p class="  text-13 py-1  m-0">
                                <span class="">
                                    July 14
                                </span>
                                <span class=" ">
                                    Looking For Python Trainers in Hyderabad
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
                    <!-- Card -->
                </div>
            </div>
        </div>
    </section>


@endsection
