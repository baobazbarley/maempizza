<?php
/**
 * Created by PhpStorm.
 * User: bubu
 * Date: 21/12/15
 * Time: 22:17
 */
?>
<div id="main-navigation-container">
    <div id="main-navigation-inner">
        <div class="container">
            <div class="relative-container clearfix">
                <div id="main-navigation-button"><i class="fa fa-reorder"></i></div>
                <div class="pull-left">
                    <div class="centered-columns">
                        <div class="centered-column">
                            <img class="page-logo" alt="logo" src="assets/images/logo.png">
                        </div>
                        <div class="centered-column hidden-xs">
                            <h1 class="site-name">MAEMPIZZA</h1>
                            <h4 class="site-name-info">Makan... ya MaemPizza</h4>
                        </div>
                    </div>
                </div>
                <nav id="main-navigation">
                    <ul>
                        <li class="active">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/menu') }}">Menu</a>
                        </li>
                        <li>
                            <a href="{{ url('/gallery') }}">Galeri</a>
                        </li>
                        <li>
                            <a href="{{ url('contact') }}">Kontak</a>
                        </li>
                        <li>
                            <div class="menu-item has-small-label cart-trigger"><i class="fa fa-shopping-cart"></i><span class="small-label"><span>2</span></span></div>
                        </li>
                    </ul>
                </nav>
            </div><!-- .relative-container -->
        </div><!-- .container -->
    </div><!-- #main-navigation-inner -->
</div><!-- #main-navigation-container -->
<div id="main-navigation-placeholder"></div>
