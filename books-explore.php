<?php $title="Explore Books"; ?>
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
    <!-- Single category search section -->
    <section id="single-category">
        <div class="container">
            <div class="row justify-content-center text-center mt-3">
                <div class="col-md-6 single-desc">
                    <div class="sub-field">
                        <input class="sub-field-input" type="email" id="myInput" onkeyup="myFunction()" placeholder="Type a book name here...">
                        <label class="subscribe-btn"><a href="#">Search</a></label>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Best Books -->
    <section id="best-books">

        <div class="container">

            <div class="row section-title ">
                <h2 class="section-title-heading">Best Books</h2>
            </div>

            <div class="row justify-content-center text-center mt-2">

                <div class="col-md-3 single-desc">
                    <a href="single-category.php"><img class="best-books_links" src="assets/img/English.jpg" alt=""></a>
                </div>
                <div class="col-md-3 single-desc">
                    <a href="single-category.php"><img class="best-books_links" src="assets/img/French.jpg" alt=""></a>
                </div>
                <div class="col-md-3 single-desc">
                    <a href="single-category.php"><img class="best-books_links" src="assets/img/Russian.jpg" alt=""></a>
                </div>
                <div class="col-md-3 single-desc">
                    <a href="single-category.php"><img class="best-books_links" src="assets/img/Swahili.jpg" alt=""></a>
                </div>

            </div>

        </div>

     </section>

     <!-- Genres -->
    <section id="Genres">

        <div class="container">

            <div class="row section-title ">
                <h2 class="section-title-heading">Genres</h2>
            </div>

            <div class="row justify-content-center text-center mt-2 mb-5">

                <div class="col-md-4 single-desc">
                    <a href="single-category.php"><img class="genre-link" src="assets/img/love.png" alt=""></a>
                </div>
                <div class="col-md-4 single-desc">
                    <a href="single-category.php"><img class="genre-link" src="assets/img/comic.jpg" alt=""></a>
                </div>
                <div class="col-md-4 single-desc">
                    <a href="single-category.php"><img class="genre-link" src="assets/img/science.png" alt=""></a>
                </div>

            </div>

        </div>

    </section>

     <!-- Popular -->
     <section id="popular">

        <div class="container">

            <div class="row section-title ">
                <h2 class="section-title-heading">Popular</h2>
            </div>

            <div class="row justify-content-center text-center mt-2 mb-5">

                <div class="col-md-6 single-desc">
                    <a href="single-category.php"><img class="popular-link" src="assets/img/popular1.jpg" alt=""></a>
                </div>
                <div class="col-md-6 single-desc">
                    <a href="single-category.php"><img class="popular-link" src="assets/img/popular2.jpg" alt=""></a>
                </div>
            </div>

        </div>

    </section>


 <?php
    include("includes/footer.php");
?>