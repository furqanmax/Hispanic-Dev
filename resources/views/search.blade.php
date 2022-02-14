@extends('layouts.layout')
@section('content')
    <section class="my-5">
        <div class="row justify-content-md-center m-0 p-0">
            <div class="col-md-7 ">
                <h4 class="text-22 mb-0  pb-0">
                    Search
                </h4>
                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 input red-border form-control-sm" type="text" placeholder="Search..."
                        aria-label="Search">
                    <div class="input-group-append">
                        <a href="{{route('search.result')}}
                        ">
                        <span class="input-group-text btn-custom" id="basic-text1" style="background:#addfc6;"><i
                            class="fas fa-search " aria-hidden="true"></i></span></a>
                    </div>
                </div>
                {{-- category --}}
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <h4 class="text-22 ">
                        Select Category
                    </h4>
                     {{-- multi select --}}

                     <select name="basic[]" multiple="multiple" class="3col active form-control red-border">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                      
                       
                    </select>

                </div>
                {{-- Pricing --}}
                <div class="pricing pt-3">
                    <h4 class="text-18 ">
                        Pricing
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Default input -->
                            <label for="min">Min</label>
                            <input type="text" id="min" placeholder="12" class="form-control red-border form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <!-- Default input -->
                            <label for="max">Max</label>
                            <input type="text" id="max" placeholder="50" class="form-control red-border form-control-sm">
                        </div>
                    </div>
                </div>
                {{-- zip code --}}
                <div class="row mt-3" >
                    <div class="col-md-4">
                        <!-- Zip code -->
                        <label for="zip">Zip code</label>
                        <input type="text" id="zip" class="form-control red-border form-control-sm" placeholder="021548">
                    </div>
                    <div class="col-md-4">
                        <!-- city -->
                        <label for="city">City</label>
                        <input type="text" id="city" placeholder="Hyderabsd" class="form-control red-border form-control-sm">
                    </div>
                </div>
               
                 {{-- state --}}
                 <div class="row mt-3" >
                    <div class="col-md-4">
                        <!--State -->
                        <label for="state">State</label>
                        <input type="text" id="state" class="form-control red-border form-control-sm" placeholder="State">
                    </div>
                    <div class="col-md-4">
                        <!-- User Id -->
                        <label for="id">User Id</label>
                        <input type="text" id="city" placeholder="User Id" class="form-control red-border form-control-sm">
                    </div>
                </div>
               {{-- Select adte --}}
               <h4 class="text-18  mt-3">
                Select Date
            </h4>
               <div class="row " >
                <div class="col-md-4">
                    <!--start -->
                    <input type="Date" id="state" class="form-control red-border form-control-sm" placeholder="State">
                </div>
                <div class="col-md-4">
                    <!--end -->
                    <input type="Date" id="city" placeholder="User Id" class="form-control red-border form-control-sm">
                </div>
            </div>

                {{-- Rating --}}
                <h4 class="text-18 pt-3">
                    Rating
                </h4>
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="one">
                    <label class="custom-control-label" for="one">1</label>
                </div>

                <!-- Default inline 2-->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="two">
                    <label class="custom-control-label" for="two">2</label>
                </div>

                <!-- Default inline 3-->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="three">
                    <label class="custom-control-label" for="three">3</label>
                </div>
                <!-- Default inline 1-->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="four">
                    <label class="custom-control-label" for="four">4</label>
                </div>

                <!-- Default inline 2-->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="five">
                    <label class="custom-control-label" for="five">5</label>
                </div>



            </div>
        </div>
    </section>

@endsection
