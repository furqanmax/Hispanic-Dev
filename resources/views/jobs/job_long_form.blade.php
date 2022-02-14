@extends('layouts.layout')
@section('content')
    <section style="background-image: url('svg/ads.png');height:100px;">

    </section>
    <section class="my-3">
        <div class="container-fluid">
            <div class="row m-0 p-0">

                <div class="col-md-8 offset-md-2">
                    {{-- heading --}}
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h3 class="text-22 font-weight-bold">
                                Jobs in Hyderbad, Telengana </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            {{-- search --}}
                            <ul class="list-inline mb-0 pb-0">
                                <li class="list-inline-item">
                                    <form action="" class="text-14">
                                        <div class="input-group md-form form-sm form-2 pl-0 ">
                                            <input class="form-control my-0 py-1 red-border" type="text"
                                                placeholder="Search" aria-label="Search">
                                            <div class="input-group-append">
                                                <span class="input-group-text btn-custom " id=""><i
                                                        class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </form>

                                </li>
                                {{-- sort by posts --}}
                                <li class="list-inline-item">
                                    <img src="{{ asset('svg/bar-chart.png') }}" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" alt="" srcset="">



                                    <div class="dropdown-menu long_form_dropdown p-3 ">
                                        <p class="font-weight-bold">
                                            Sort By Posts
                                        </p>
                                        <form action="">
                                            <div class=" mb-0 pb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        search titles only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        has image
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        posterd today
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        posterd this month
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        include nearby areas
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        Internship
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        non-profit
                                                    </label>
                                                </div>
                                            </div>
                                            <p class="font-weight-bold">
                                                Employment type
                                            </p>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        full-time
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        part time
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        contract    
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" pb-0 mb-0" href="#">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        employee’s choice
                                                    </label>
                                                </div>
                                            </div>

                                        </form>
                                        

                                    </div>
                                    <!-- Basic dropdown -->
                                </li>

                            </ul>
                        </div>
                    </div>
                    {{-- filters --}}
                    <div class="filters">
                        <ul class="list-inline">
                            <li class="list-inline-item active btn-custom px-3 py-1">
                                <i class="fa fa-filter" aria-hidden="true"></i> All
                            </li>
                            <li class="list-inline-item">
                                Order Online
                            </li>
                            <li class="list-inline-item">
                                Kind Friendly
                            </li>
                            <li class="list-inline-item">
                            
                                Kind Friendly

                            </li>
                        </ul>
                        
                    </div>
                    {{-- posts --}}
                    <div class="mt-3">
                        
                        <div class="card p-2 shadow-none custom_grey ">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-md-center">
                                    <img src="http://localhost/hispanic/public/svg/post.png " class="img img-fluid" alt="">
                                </div>
                                <div class="col-md-10">
                                   
                                    <p class="text-16 font-weight-bold mb-0 pb-2">
                                        Vacancy for Php Associate 
                                    </p>

                                    <p class="text-14">
                                        <span>Google</span>   
                                        <span>
                                        <img src="http://localhost/hispanic/public/svg/map-pin.svg" alt="">   Hyderabad, Telangana India
                                        </span>
                                    </p>
                                    
                                    <p>
                                        Qualifications:<br>
Bachelor's degree in Electrical Engineering or Computer Science, or equivalent practical experience 15 years of technical Bachelor's degree in Electrical.
                                    </p>
                                  
                                </div>
                                
                            </div>
                        </div>
                        {{-- without image --}}
                        <div class="card mt-3 p-2 shadow-none custom_grey ">
                            <div class="row">
                               
                                <div class="col-md-12">
                                   
                                    <p class="text-16 font-weight-bold mb-0 pb-2">
                                        Vacancy for Php Associate 
                                    </p>

                                    <p class="text-14">
                                        <span>Google</span>   
                                        <span>
                                        <img src="http://localhost/hispanic/public/svg/map-pin.svg" alt="">   Hyderabad, Telangana India
                                        </span>
                                    </p>
                                    
                                    <p>
                                        Qualifications:<br>
Bachelor's degree in Electrical Engineering or Computer Science, or equivalent practical experience 15 years of technical Bachelor's degree in Electrical.
                                    </p>
                                  
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

    <!-- Button trigger modal -->



@endsection
