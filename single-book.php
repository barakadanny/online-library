<?php $title="Download book"; ?>
<?php 
    include("includes/constants.php");
    include("includes/functions.php");
?>

<?php session_start(); ?>
<?php 
    include("includes/header.php");
?>


    
<?php
    include("includes/navigation.php");
?>

    <!-- Feature section -->
    <section id="single-book">

        <div class="container">
            <div class="row mt-5 mb-5 pt-5 pb-5 app-download">
                <div class="col-md-6">
                    <img src="assets/img/book-1.png" class="feature-img" alt="">

                </div>
                <div class="col-md-6">
                    <div class="book-summary">
                        <h3 class="book-title">Migration, Gender and Care Economy</h3>
                        <span class="book-author">Irudaya-Raja 2006</span>
                        <div class="book-action">
                            <h4 class="book-price">$0.00</h4>
                            <a href="#" class="btn btn-white">Download</a>
                            <ul class="rating">
                                <li class="rating-item" data-rate="1"></li>
                                <li class="rating-item active" data-rate="2"></li>
                                <li class="rating-item" data-rate="3"></li>
                                <li class="rating-item" data-rate="4"></li>
                                <li class="rating-item" data-rate="5"></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum asperiores deleniti.
                            Facere, possimus Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id impedit facere
                             esse excepturi omnis vitae at nesciunt debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                             Impedit nihil aperiam facilis officiis doloremque optio mollitia, asperiores omnis atque ea fuga amet dolorem. 
                             Cumque asperiores vel dolorem, animi quisquam illo.
                             Voluptatibus, repudiandae? Labore sunt, possimus culpa excepturi ea necessitatibus mollitia adipisci voluptatum.
                            architecto necessitatibus alias veritatis aperiam eius quibusdam vel ducimus fuga
                            delectus, velit, temporibus consequatur voluptatibus a.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

 <?php
    include("includes/footer.php");
?>