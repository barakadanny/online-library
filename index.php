<?php $title="Home"; ?>
<?php session_start(); ?>
<?php 
    include("includes/constants.php");
    include("includes/functions.php");
?>
<?php 
    include("includes/header.php");
?>
  
<?php
    include("includes/navigation.php");
?>

    <!-- Hero section -->
    <section id="hero">

        <div class="container">
                <?php include('partials/_flash.php'); ?>
            <div class="row main-hero-content">

                    <div class="col-md-6">
                        <h1>Explore The best collection of Books with Us</h1>
                        <div class="hero-buttons">
                            <a href="books-explore.php" class="btn btn-outline-primary btn-white">Explore Books</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-box">
                            <!-- <img src="assets/img/hero-img.png" class="img-fluid" alt=""> -->
                            <img src="assets/img/img10.png" class="img-fluid" alt="">
                        </div>
                    </div>

            </div>

        </div>

    </section>

     <!-- About section -->
     <section id="about">

        <div class="container">

            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">Most ratted Books</h2>
            </div>

            <div class="row justify-content-center text-center mt-5">

                <div class="col-md-4 single-desc">
                    <img class="desc-img" src="assets/img/book-1.png" alt="">
                    <div class="ratted-desc">
                        <ul class="rating">
                            <li class="rating-item" data-rate="1"></li>
                            <li class="rating-item active" data-rate="2"></li>
                            <li class="rating-item" data-rate="3"></li>
                            <li class="rating-item" data-rate="4"></li>
                            <li class="rating-item" data-rate="5"></li>
                        </ul>
                        <a href="single-book.php"><div class="ratted-title">Migration, Gender and Care Economy</div></a>
                        <div class="ratted-book-author">By Gerald de gord</div>
                        <a href="" class="ratted-btn">Get Now</a>
                    </div>
                </div>
                <div class="col-md-4 single-desc">
                    <img class="desc-img" src="assets/img/book-2.png" alt="">
                    <div class="ratted-desc">
                        <ul class="rating">
                            <li class="rating-item" data-rate="1"></li>
                            <li class="rating-item active" data-rate="2"></li>
                            <li class="rating-item" data-rate="3"></li>
                            <li class="rating-item" data-rate="4"></li>
                            <li class="rating-item" data-rate="5"></li>
                        </ul>
                        <a href="single-book.php"><div class="ratted-title">Migration, Gender and Care Economy</div></a>
                        <div class="ratted-book-author">By Gerald de gord</div>
                        <a href="" class="ratted-btn">Get Now</a>
                    </div>
                </div>
                <div class="col-md-4 single-desc">
                    <img class="desc-img" src="assets/img/hero-img.png" alt="">
                    <div class="ratted-desc">
                        <ul class="rating">
                            <li class="rating-item" data-rate="1"></li>
                            <li class="rating-item active" data-rate="2"></li>
                            <li class="rating-item" data-rate="3"></li>
                            <li class="rating-item" data-rate="4"></li>
                            <li class="rating-item" data-rate="5"></li>
                        </ul>
                        <a href="single-book.php"><div class="ratted-title">Migration, Gender and Care Economy</div></a>
                        <div class="ratted-book-author">By Gerald de gord</div>
                        <a href="" class="ratted-btn">Get Now</a>
                    </div>
                </div>

            </div>

        </div>

     </section>

     <!-- Feature section -->
     <section id="features-app">

        <div class="container">
            <div class="row mt-5 pt-5 app-download">
                <div class="col-md-6 device">
                    <img src="assets/img/img11.png" class="device-feature" style="width:300px;" alt="">
                </div>
                <div class="col-md-6">
                    <div class="feature-block">
                        <span class="feature-span">DigiBook</span>
                        <h3 class="feature-app-title">Soon Available on your Smartphone</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum asperiores deleniti. Facere, possimus 
                            architecto necessitatibus alias veritatis aperiam eius quibusdam vel ducimus fuga 
                            delectus, velit, temporibus consequatur voluptatibus a.</p>
                            <img class="ios-download" src="assets/img/ios.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!-- subscription section -->
    <section id="subscribe">
        <div class="container">
            <div class="row pt-5 pb-5 align-items-center">
                <div class="col-md-6">
                    <p class="sub-text">Subscribe To Our Newsletter
                        Newest Books Updates</p>
                </div>
                <div class="col-md-6">
                    <div class="sub-field">
                        <input class="sub-field-input" type="email" placeholder="Email">
                        <label class="subscribe-btn"><a href="#">Subscribe</a></label>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php
    include("includes/footer.php");
?>