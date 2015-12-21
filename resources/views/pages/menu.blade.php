<?php
/**
 * Created by PhpStorm.
 * User: bubu
 * Date: 21/12/15
 * Time: 23:42
 */
?>
@extends('master')

@section('title', 'Menu')

@section('content')

    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="assets/images/headers/menu.png">
        <div class="page-title">
            <div class="container">
                <h1>Menu Spesial</h1>
                <p>Semua kelezatan pizza disajikan dengan cinta dan kasih sayang</p>
            </div><!-- .container -->
        </div>
    </div><!-- .page-title-img -->

    <section class="section-gray">
        <div class="container" id="filter">
            <div class="text-center">
                Filter:
                <ul class="list-filter">
                    <li><a href="#filter" class="active">All</a></li>
                    <li><a href="#originalpizza">Original Pizza</a></li>
                    <li><a href="#blackpizza">Black Pizza</a></li>
                </ul>
            </div>

            <div id="originalpizza" class="border-lines-container">
                <h5 class="border-lines">Original Pizza</h5>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-preview">
                        <div class="product-photo">
                            <div class="product-price">
                                <sub>$</sub>7.<sup>99</sup>
                            </div>
                            <img alt="product" src="assets/images/products/1.png">
                        </div>
                        <h3 class="product-title">Tuna Mayo</h3>
                        <p class="product-info">Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil, parsley flakes, silicon dioxide.</p>
                        <a href="#" class="cart-trigger button-clean button-text-small">Order now</a>
                    </div><!-- .product-preview -->
                </div><!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="product-preview">
                        <div class="product-photo">
                            <div class="product-price">
                                <sub>$</sub>5.<sup>99</sup>
                            </div>
                            <img alt="product" src="assets/images/products/2.png">
                        </div>
                        <h3 class="product-title">Macaroni Cheese</h3>
                        <p class="product-info">Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil, parsley flakes, silicon dioxide.</p>
                        <a href="#" class="cart-trigger button-clean button-text-small">Order now</a>
                    </div><!-- .product-preview -->
                </div><!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="product-preview">
                        <div class="product-photo">
                            <div class="product-price">
                                <sub>$</sub>4.<sup>99</sup>
                            </div>
                            <img alt="product" src="assets/images/products/3.png">
                        </div>
                        <h3 class="product-title">Pepperoni Burner</h3>
                        <p class="product-info">Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil, parsley flakes, silicon dioxide.</p>
                        <a href="#" class="cart-trigger button-clean button-text-small">Order now</a>
                    </div><!-- .product-preview -->
                </div><!-- .col-md-4 -->
            </div><!-- .row -->

            <div id="blackpizza" class="border-lines-container">
                <h5 class="border-lines">Black Pizza</h5>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-preview">
                        <div class="product-photo">
                            <div class="product-price">
                                <sub>$</sub>7.<sup>99</sup>
                            </div>
                            <img alt="product" src="assets/images/products/1.png">
                        </div>
                        <h3 class="product-title">Tuna Mayo</h3>
                        <p class="product-info">Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil, parsley flakes, silicon dioxide.</p>
                        <a href="#" class="cart-trigger button-clean button-text-small">Order now</a>
                    </div><!-- .product-preview -->
                </div><!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="product-preview">
                        <div class="product-photo">
                            <div class="product-price">
                                <sub>$</sub>5.<sup>99</sup>
                            </div>
                            <img alt="product" src="assets/images/products/2.png">
                        </div>
                        <h3 class="product-title">Macaroni Cheese</h3>
                        <p class="product-info">Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil, parsley flakes, silicon dioxide.</p>
                        <a href="#" class="cart-trigger button-clean button-text-small">Order now</a>
                    </div><!-- .product-preview -->
                </div><!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="product-preview">
                        <div class="product-photo">
                            <div class="product-price">
                                <sub>$</sub>4.<sup>99</sup>
                            </div>
                            <img alt="product" src="assets/images/products/3.png">
                        </div>
                        <h3 class="product-title">Pepperoni Burner</h3>
                        <p class="product-info">Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil, parsley flakes, silicon dioxide.</p>
                        <a href="#" class="cart-trigger button-clean button-text-small">Order now</a>
                    </div><!-- .product-preview -->
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

@endsection

