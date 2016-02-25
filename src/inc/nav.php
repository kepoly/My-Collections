<?php
/**
 * Created by PhpStorm.
 * User: kepoly
 * Date: 2/24/2016
 * Time: 7:24 PM
 */
?>

<nav class="navbar navbar-default navbar-fixed-top" id="userNavBar">
    <div class="container">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav navbar-right mainNavList hidden-xs">
                <li><a href="home">Login</a></li>
                <li><a href="home">Register</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<nav class="navbar navbar-default mainNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" id="navbarHead">
            <button ng-click="mobileCheck(); mobileNavCheck = !mobileNavCheck" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#mainNavBarNav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="mainLogo" class="navbar-brand" href="#">My Media Collection v 0.0.1</a>
            <a id="secondLogo" class="hide" href="#">My Media Collection</a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav navbar-right mainNavList hidden-xs">
                <li><a href="home">Home</a></li>
                <li><a href="how-it-works">Leaderboards</a></li>
                <li><a href="book">How it Works</a></li>
                <li><a href="faq">FAQ</a></li>
                <li><a href="contact">Support</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<nav class="navbar navbar-default mediaNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" id="navbarHead">
            <button ng-click="mobileCheck(); mobileNavCheck = !mobileNavCheck" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#mainNavBarNav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="mainLogo" class="navbar-brand" href="#">logged in tool bar</a>
            <a id="secondLogo" class="hide" href="#">My Media Collection</a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav navbar-right mainNavList hidden-xs">
                <li><a href="home">Movies (25)</a></li>
                <li><a href="how-it-works">Tv Shows (25)</a></li>
                <li><a href="book">Games (25)</a></li>
                <li><a href="faq">Adult (25)</a></li>
                <li><a href="contact">All (100)</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<noscript>
    <div class="nojs">Javascript is either disabled or not supported in your browser. Please enable it or use a Javascript enabled browser.</div>
</noscript>


