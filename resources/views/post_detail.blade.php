@extends('layouts.layout')
@section('content')
<section style="background-image: url('svg/ads.png');height:100px;">

</section>
<section class="my-5">
   <div class="container-fluide">
       <div class="row m-0 p-0 d-flex justify-content-center">
           <div class="col-md-8 offse-md-2">
            <h3 class="text-16 font-weight-bold m-0 p-0">
                Looking for ERP Trainers(SAP, Sage, Acumatica and Odoo)
            </h3>
            <p class="text-14">
                4 days ago
            </p>
            <p class="text-14">
                Vajram Tiara is a luxury 3 and 4bhk apartment with world class amenities. This property is located in Doddaballapur road, Near Yelahanka, Bangalore North. And now it is available for sale. Vajram Tiara
            </p>
            <ul class="list-inline m-0 p-0">
                
                <li class="list-inline-item text-14">
                    <i class="far fa-thumbs-up "></i>
                    <i class="far fa-thumbs-down pl-3"></i>
                    <img src="{{asset('svg/share.svg')}}" class="pl-3" alt="">
                    <i class="far fa-comment pl-3"></i>
                </li>
                
                <li class="list-inline-item pl-1">
                    <p class="text-14">
                      <i class="far fa-star" aria-hidden="true"></i> &nbsp;4.5
                    </p>
                </li>
                <li class="list-inline-item pl-1">
                    <p class="text-14">
                      Reply
                    </p>
                </li>
                <li class="list-inline-item pl-1">
                    <p class="text-14">
                       Report Abuse
                    </p>
                </li>
                
                
            </ul>
                {{-- realted post --}}

            <div class="pt-4">
                <h3 class="text-16 font-weight-bold ">
                   Realted Posts
                </h3>
               
                {{-- realted post --}}
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card p-2 shadow-none custom_grey ">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="http://localhost/hispanic/public/svg/profile.png" alt="">

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
                            
                                <p class="text-14 font-weight-bold mb-0 pb-0">
                                    Apple iPhone 13 128 GB, Midnight
                                </p>
                                <p class="text-12 grey-color">
                                    $ 899
                                </p>
                                
                                <img src="http://localhost/hispanic/public/svg/slide.png" alt="">
                                
                                <div class="actions mt-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <ul class="list-inline m-0 p-0">
                
                                                <li class="list-inline-item text-14">
                                                    <i class="far fa-thumbs-up "></i>
                                                    <i class="far fa-thumbs-down pl-3"></i>
                                                    <img src="{{asset('svg/share.svg')}}" class="pl-3" alt="">
                                                    <i class="far fa-comment pl-3"></i>
                                                </li>
                                                
                                                <li class="list-inline-item pl-1">
                                                    <p class="text-14">
                                                      <i class="far fa-star" aria-hidden="true"></i> &nbsp;4.5
                                                    </p>
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
                                    <img src="http://localhost/hispanic/public/svg/profile.png" alt="">

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
                            
                                <p class="text-14 font-weight-bold mb-0 pb-0">
                                    Apple iPhone 13 128 GB, Midnight
                                </p>
                                <p class="text-12 grey-color">
                                    $ 899
                                </p>
                                
                                <img src="http://localhost/hispanic/public/svg/slide.png" alt="">
                                
                                <div class="actions mt-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <ul class="list-inline m-0 p-0">
                
                                                <li class="list-inline-item text-14">
                                                    <i class="far fa-thumbs-up "></i>
                                                    <i class="far fa-thumbs-down pl-3"></i>
                                                    <img src="{{asset('svg/share.svg')}}" class="pl-3" alt="">
                                                    <i class="far fa-comment pl-3"></i>
                                                </li>
                                                
                                                <li class="list-inline-item pl-1">
                                                    <p class="text-14">
                                                      <i class="far fa-star" aria-hidden="true"></i> &nbsp;4.5
                                                    </p>
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
               </div>
           </div>
           <div class="col-md-2 text-right">
            <img src="{{ asset('svg/ads2.jpg') }}" class="" style="height: 700px;" alt="">
        </div>
       </div>
       
   </div>
</section>
@endsection