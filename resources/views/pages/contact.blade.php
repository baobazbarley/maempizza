<?php
/**
 * Created by PhpStorm.
 * User: bubu
 * Date: 22/12/15
 * Time: 0:05
 */
?>
@extends('master')

@section('title', 'Kontak')

@section('content')

    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="assets/images/headers/contact.png">
        <div class="page-title">
            <div class="container">
                <h1>Contact</h1>
                <p>Lorem ipsum dolor sit amet</p>
            </div><!-- .container -->
        </div>
    </div><!-- .page-title-img -->

    <section>
        <div class="container">
            <h3 class="text-center text-uppercase">Peta Dapur Maem Pizza</h3>
            <div class="map-container">
                <div id="map-canvas">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-uppercase">Kirimkan Saran dan Kritik Anda</h3>
                    <form id="form-contact" class="form-big" action="assets/php/send_email.php" method="post" data-email-not-set-msg="Email is required" data-message-not-set-msg="Message is required" data-name-not-set-msg="Name is required" data-ajax-fail-msg="Request could not be sent, try later" data-success-msg="Email successfully sent.">
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" name="name" placeholder="Nama Anda*">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="email" placeholder="Email Anda*">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="phone" placeholder="Nomor Telp Anda*">
                            </div>
                        </div>
                        <input type="text" name="subject" placeholder="Judul Pesan*">
                        <textarea name="message" placeholder="Isi Pesan*"></textarea>
                        <div class="return-msg"></div>
                        <div class="text-right">
                            <input class="button-yellow button-text-low button-long button-low" type="submit" value="Submit">
                        </div>
                    </form>
                    <div class="margin-20"></div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-uppercase">Information</h3>
                    <address class="address-big">
                        <p>
                            Dapur Maem Pizza<br>
                            Jalan Sukaria No. 85<br>
                            Yogyakarta
                        </p>
                        <p>
                            Email: maempizza@gmail.com
                        </p>
                    </address>
                </div>
            </div>
        </div><!-- .container -->
    </section>

@endsection

@section('script')

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

@endsection