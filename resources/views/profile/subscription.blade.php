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
                            <li class="list-group-item">Buy & Sell</li>
                        </a>
                        <a href="{{route('subscription')}}" class="text-color">
                            <li class="list-group-item active">Subscription</li>
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
                    <h3 class="text-22 font-weight-bold">
                        Choose Your Plan
                    </h3>
                    {{-- planes --}}
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-md-4">
                                {{-- weekly --}}
                                <div class="card   pricing-card">
                                    <div class="card-header py-2 pricing-card-header  text-center ">
                                        <p class="pb-0 mb-0 text-22" style="color: #32b15a">
                                            Weekly
                                        </p>


                                    </div>
                                    <div class="card-body px-4 pb-2 p-0 m-0">
                                        <h3 class="font-weight-bold py-4  mb-0 tex-22 text-center grey-color">
                                            $10 <span class="text-12">/ weekly</span>
                                        </h3>
                                        <form action="" class="text-14">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value=""
                                                        checked disabled>
                                                    Extra photo upload
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value=""
                                                        checked disabled>
                                                    High resolution photo upload
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value=""
                                                        checked disabled>
                                                    Push notifications
                                                </label>
                                            </div>

                                        </form>
                                        {{-- subscription --}}
                                        <a href="http://" class="btn btn-subscribe btn-md shadow-none btn-block my-3">Buy
                                            Subscription</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 ">
                                {{-- weekly --}}
                                <div class="card   pricing-card">
                                    <div class="card-header py-2 pricing-card-header  text-center ">
                                        <p class="pb-0 mb-0 text-22" style="color: #32b15a">
                                            Monthly
                                        </p>


                                    </div>
                                    <div class="card-body px-4 pb-2 p-0 m-0">
                                        <h3 class="font-weight-bold py-4 mb-0 tex-22 text-center grey-color">
                                            $40 <span class="text-12">/ Monthly</span>
                                        </h3>
                                        <form action="" class="text-14">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value=""
                                                        checked disabled>
                                                    Extra photo upload
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value=""
                                                        checked disabled>
                                                    High resolution photo upload
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="" id="" value=""
                                                        checked disabled>
                                                    Push notifications
                                                </label>
                                            </div>

                                        </form>
                                        {{-- subscription --}}
                                        <a href="http://" class="btn btn-subscribe btn-md shadow-none btn-block my-3">Buy
                                            Subscription</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- active plans --}}
                    <div class="mt-4">
                        <h3 class="text-18 font-weight-bold ">
                            Active Plan
                        </h3>
                        <table class="table text-14">
                            <tbody>
                                <tr>
                                    <td scope="">Weekly plan</td>
                                    <td>Active</td>
                                    <td>Start Date</td>
                                    <td>14 July, 2021</td>
                                    <td>End Date</td>
                                    <td>21 July, 2021 </td>
                                </tr>
                               
                            </tbody>
                        </table>
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
