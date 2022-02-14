@extends('layouts.layout_signup')
@section('template')
    <section class="">
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-6">
                    {{-- order-review --}}
                    <div class="order_review">
                        <div style="width: 70%">
                            <div class="card search  shadow-none p-4">
                                <h3 class="text-16 font-weight-bold pb-2">
                                    Review your order
                                </h3>
                                <p class="mb-0 pb-0 text-14">
                                    Monthly subscription
                                </p>
                                <p class="text-14 pb-0 mb-0">
                                    Weekly subscription
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- payment details --}}
                    <div class="payment_details mt-5">
                        <h2 class="text-22 font-weight-bold">
                            Payment Details
                        </h2>
                        {{-- form --}}
                        <form action="">
                            <div class="mt-4">
                                <input type="text" id="" autocomplete="off" class="form-control mb-4 text-14" placeholder="Name Of Card Holder">

                            </div>
                            <div class="">
                                <input type="text" id="" autocomplete="off" class="form-control mb-4 text-14" placeholder="Card Number">

                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                <input type="text" id="inputExpDate" class="form-control  mb-4 text-14" placeholder="MM/YY" maxlength="7">

                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name=""  placeholder="CVV" class="form-control  mb-4 text-14" id="">

                                    </div>
                                </div>
                            </div>
                            <a class="btn white-text btn-md shadow-none main-color btn-block  waves-effect waves-light" type="submit" href="">Pay Now</a>
                            <div>
                            </div>
                        
                        </form>
                    </div>
                </div>
                    <div class="col-md-6 px-5">
                        <div>
                            {{-- ads prevew --}}
                            <h2 class="text-22 font-weight-bold pb-3">
                                Ads Preview
                            </h2>
                            <img src="{{asset('svg/add3.png')}}" alt="">
                        </div>
                        <div class="order_summary mt-3">
                            <div style="width: 70%">
                                <div class="card search  shadow-none p-4">
                                    <h3 class="text-16  font-weight-bold pb-2">
                                        Order Summary
                                    </h3>
                                    <table>
                                        <tr>
                                            <td>
                                                Items:
                                            </td>
                                            <td class="text-right">
                                                $40.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Items:
                                            </td>
                                            <td class="text-right">
                                                $20.00
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-16 font-weight-bold pt-3">Total</td>
                                            <td class="text-16 text-right font-weight-bold pt-3">$20</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
