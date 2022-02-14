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
                                <!-- Default form signup -->
                                <form class="white p-4 " action="#!">

                                    <p class="h4 mb-4 text-22 font-weight-bold">Signup</p>
                                    {{-- text --}}
                                    <input type="text" id="name" autocomplete="off" class="form-control mb-4 text-14"
                                        placeholder="Name">
                                    <!-- Email -->
                                    <input type="email" id="defaultLoginFormEmail" autocomplete="off"
                                        class="form-control mb-4 text-14" placeholder="E-mail">

                                    <!-- Password -->
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4 text-14"
                                        placeholder="Password">


                                    <!-- Sign in button -->
                                    <button class="btn white-text btn-md shadow-none main-color btn-block my-4"
                                        type="submit">Signup</button>

                                    <!-- Register -->
                                    <div>
                                        <!-- Forgot password -->
                                        <a href="{{ url('login') }}" style="color: #151d22;">Already have an account?</a>
                                    </div>



                                </form>
                                <!-- Default form login -->
                            </div>
                            {{-- social logins --}}
                            <div class="col-md-6">
                                <div class="socail white p-4">
                                    <p class="h4 mb-4 font-weight-bold text-22">Socail Media Signup</p>
                                    <div>
                                        <a href="" class="btn btn-block  shadow-none  btn-sm fac"> <i
                                                class="fab fa-facebook-f" aria-hidden="true"></i> Facebook</a>
                                        <a href="" class="btn btn-block mt-3 shadow-none google  btn-sm"> <i
                                                class="fa fa-envelope" aria-hidden="true"></i> Google</a>
                                        <a href="" class="btn btn-block my-3 shadow-none apple  btn-sm"> <i
                                                class="fas fa-apple-alt    "></i> Apple</a>
                                    </div>

                                </div>


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
