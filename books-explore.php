<?php $title="Explore Books"; ?>
<?php session_start(); ?>
<?php 
    include("includes/constants.php");
    include("includes/functions.php");
    include("includes/config.php");
?>
<?php 
    include("includes/header.php");
?>
    
<?php
    include("includes/navigation.php");
?>
    <!-- Single category search section -->
    <section id="single-category">
        <div class="container single-category-class">
            <!-- <img src="assets/img/img8.png" class="single-category-search" style="width:300px;" alt=""> -->
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
                <h2 class="section-title-heading">Languages</h2>
            </div>

            <div class="row justify-content-center text-center mt-2">
                <?php
                    $q="SELECT * FROM language";
                    $result = mysqli_query($con, $q);
                    while($res = mysqli_fetch_array($result)){
                ?>

                <div class="col-md-3 single-desc">
                    <h2 class="genre-title"><?php echo $res['language_name'];?></h2>
                    <a href="language.php?language_ID=<?php echo $res['language_ID']; ?>"><img class="best-books_links" src="admin/<?php echo $res['language_image'];?>" alt=""></a>
                </div>
                <?php
                }
                ?>

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

            <?php
                $q="SELECT * FROM genre";
                $result = mysqli_query($con, $q);
                while($res = mysqli_fetch_array($result)){
            ?>

                <div class="col-md-4 single-desc">
                    <h2 class="genre-title"><?php echo $res['genre_name'];?></h2>
                    <a href="single-category.php?genre_ID=<?php echo $res['genre_ID']; ?>"><img class="genre-link" src="admin/<?php echo $res['genre_image'];?>" alt=""></a>
                </div>
            <?php
                }
                ?>

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
                    <h2 class="genre-title">From Languages</h2>
                    <a href="single-category.php"><img class="popular-link" src="assets/img/popular1.jpg" alt=""></a>
                </div>
                <div class="col-md-6 single-desc">
                    <h2 class="genre-title">From Genre</h2>
                    <a href="single-category.php"><img class="popular-link" src="assets/img/popular2.jpg" alt=""></a>
                </div>
            </div>

        </div>

    </section>


 <?php
    include("includes/footer.php");
?>