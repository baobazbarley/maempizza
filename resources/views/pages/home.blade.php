<?php
/**
 * Created by PhpStorm.
 * User: bubu
 * Date: 21/12/15
 * Time: 23:16
 */
?>
@extends('master')

@section('title', 'Beranda')

@section('content')

    <section>
        <div class="container">
            <div id="product-slider" class="owl-pagination-dash owl-navigation-box">
                <div class="offer">
                    <img alt="product" src="assets/images/slider/1.jpg">
                    <div class="offer-price-small">
                        $<span class="offer-price-val1">7</span><span class="offer-price-val2">99</span>
                    </div>
                    <div class="offer-detail">
                        <div class="offer-detail-inner">
                            <div class="offer-detail-content">
                                <h6>ENVATO PIZZA:</h6>
                                <h3>CHEESE, CRUST, OLIVES</h3>
                                <div class="price-huge clearfix">
                                    <div class="pull-left">
                                        <span class="price-currency">$</span><span class="price-val-1">7</span>
                                    </div>
                                    <div class="pull-left">
                                        <span class="price-val-2">99</span><br>
                                        <a href="#" class="button-red button-text-big cart-trigger">ORDER NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .offer-detail-inner -->
                    </div><!-- .offer-detail -->
                </div><!-- .offer -->
                <div class="offer">
                    <img alt="product" src="assets/images/slider/2.jpg">
                    <div class="offer-price-small">
                        $<span class="offer-price-val1">7</span><span class="offer-price-val2">99</span>
                    </div>
                    <div class="offer-detail">
                        <div class="offer-detail-inner">
                            <div class="offer-detail-content">
                                <h6>ENVATO PIZZA:</h6>
                                <h3>CHEESE, CRUST, OLIVES</h3>
                                <div class="price-huge clearfix">
                                    <div class="pull-left">
                                        <span class="price-currency">$</span><span class="price-val-1">7</span>
                                    </div>
                                    <div class="pull-left">
                                        <span class="price-val-2">99</span><br>
                                        <a href="#" class="button-red button-text-big cart-trigger">ORDER NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .offer-detail-inner -->
                    </div><!-- .offer-detail -->
                </div><!-- .offer -->
            </div><!-- #product-slider -->

            <div class="row">
                <div class="col-md-6">
                    <a href="#">
                        <article class="banner">
                            <img alt="banner" src="assets/images/banners/1.jpg">
                            <div class="banner-over">
                                <div class="centered-columns">
                                    <div class="centered-column">
                                        <div class="banner-1-detail">
                                            THE BEST PIZZA<br>
                                            <strong>TEMPLATE</strong> ON ENVATO<br>
                                            MARKET
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                    <a href="#">
                        <article class="banner">
                            <img alt="banner" src="assets/images/banners/2.jpg">
                            <div class="banner-over">
                                <div class="centered-columns">
                                    <div class="centered-column centered-column-bottom text-center">
                                        <span class="button-yellow button-text-big">GET FREE RECIPE</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
                </div><!-- .col-md-6 -->
            </div><!-- .row -->

        </div><!-- .container -->
    </section><!-- #section-intro -->

    <div class="section-delimiter"></div>

@endsection
