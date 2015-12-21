<?php
/**
 * Created by PhpStorm.
 * User: bubu
 * Date: 21/12/15
 * Time: 23:59
 */
?>
@extends('master')

@section('title', 'Galeri')

@section('content')

    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="assets/images/headers/gallery.png">
        <div class="page-title">
            <div class="container">
                <h1>Galeri</h1>
                <p>Yuk lihat kecerian dan kegembiraan MaemPizza</p>
            </div><!-- .container -->
        </div>
    </div><!-- .page-title-img -->

    <section>
        <div class="container">
            <h1 class="bottom-line">Galeri</h1>
            <p class="text-center"><em>Ada cinta disetiap foto MaemPizza.</em></p>
            <div class="text-center">
                Filter:
                <ul id="gallery-filter" class="list-filter">
                    <li><a class="isotope-filter active" data-filter="*">All</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-pizza">Pizza</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-sandwiches">Sandwiches</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-hamburgers">Hamburgers</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-wordpress">Wordpress</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-photoshop">Photoshop</a></li>
                </ul>
            </div>
            <div id="gallery" class="gallery row">
                <div class="col-md-4 col-sm-6 col-xs-12 grid-sizer"></div><!-- basic size of the grid -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-pizza filter-sandwiches filter-wordpress">
                    <img alt="photo" src="assets/images/gallery3/1.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/1.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-sandwiches filter-wordpress">
                    <img alt="photo" src="assets/images/gallery3/2.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/2.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-pizza filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/3.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/3.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-hamburgers filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/4.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/4.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-pizza filter-sandwiches filter-hamburgers">
                    <img alt="photo" src="assets/images/gallery3/5.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/5.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-sandwiches filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/6.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/6.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-pizza filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/7.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/7.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-hamburgers filter-wordpress">
                    <img alt="photo" src="assets/images/gallery3/8.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/8.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-pizza filter-sandwiches filter-hamburgers">
                    <img alt="photo" src="assets/images/gallery3/9.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/9.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
            </div><!-- .gallery -->
        </div><!-- .container -->
    </section>

@endsection