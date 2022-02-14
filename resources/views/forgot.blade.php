@extends('layouts.layout_signup')
@section('template')
    <section>
        <div class="container my-4">
            {{-- posts --}}
            <div class="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card search shadow-none">
                            <div class="card-body">
                                <h5 class="text-16 font-weight-bold">Sample post</h5>
                                <p class="text-14  mb-0 pb-0 black-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. At
                                    molestias doloremque quas repellendus atque dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card search shadow-none">
                            <div class="card-body">
                                <h5 class="text-16 font-weight-bold">Sample post</h5>
                                <p class="text-14  mb-0 pb-0 black-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. At
                                    molestias doloremque quas repellendus atque dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card search shadow-none">
                            <div class="card-body">
                                <h4 class="text-16 font-weight-bold">Sample post</h4>
                                <p class="text-14  black-text mb-0 pb-0" style="color: #">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. At
                                    molestias doloremque quas repellendus atque dolorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- form --}}
            <div class="login_form mt-4">
                <div class="row">
                    {{-- form --}}
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Default form login -->
                                <form class="white p-4 " action="#!">

                                    <p class="h4  text-22 font-weight-bold">
                                        Forgot Password
                                    </p>
                                    <p class="text-13 ">
                                        Reset password link will be sent to your email
                                    </p>
                                   

                                    <!-- Email -->
                                    <input type="email" id="defaultLoginFormEmail" autocomplete="off"
                                        class="form-control mb-4 text-14" placeholder="E-mail">

                                 


                                    <!-- Sign in button -->
                                    <button class="btn white-text btn-md shadow-none main-color btn-block my-4"
                                        type="submit">Reset password</button>

                                    



                                </form>
                                <!-- Default form login -->
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card white shadow-none " style="height: 100%;">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body d-flex align-items-center">
                                <h4 class="text-22">Benefits / new messages</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
