<?php $title="Download book"; ?>
<?php session_start(); ?>
<?php 
    //include("filters/auth_filter.php");
    require('includes/config.php');
    include("includes/constants.php");
    require('includes/functions.php');
?>

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
                <?php
                $id= (int)$_GET['book_ID'];
                //$user_ID= $_SESSION['user_ID'];
                //echo $_SESSION['user_ID'];
                $q= "SELECT * FROM book WHERE book_ID='$id' ";
                $result= mysqli_query($con, $q);
                while($res=mysqli_fetch_array($result)){

                ?>
                <div class="col-md-6 image-section">
                    <img src="librarian/<?php echo $res['book_image'];?>" class="feature-img" alt="">
                </div>
                <div class="col-md-6">
                    <div class="book-summary">
                        <h3 class="book-title"><?php echo $res['book_title'];?></h3>
                        <span class="book-author"><?php echo $res['book_author'];?>; <?php echo $res['book_year'];?></span>
                        <div class="book-action">
                            <h4 class="book-price">$0.00</h4>
                            <?php if(is_logged_in() ): ?>
                                <a href="librarian/book_pdf/<?php echo $res['book_pdf'];?>" class="btn btn-white" target="_blank">Download</a>
                            <?php else: ?>
                                <a href="login.php" class="btn btn-white">Please login to download</a>
                            <?php endif; ?>
                            <ul class="rating">
                                <li onclick="window.location.href='includes/star.php?clicked=1&book_id=<?php echo $res['book_ID'];?>&user_ID=<?php echo $_SESSION['user_ID']; ?>'" class="rating-item" data-rate="1"></li>
                                <li onclick="window.location.href='includes/star.php?clicked=2&book_id=<?php echo $res['book_ID'];?>&user_ID=<?php echo $_SESSION['user_ID']; ?>'" class="rating-item active" data-rate="2"></li>
                                <li onclick="window.location.href='includes/star.php?clicked=3&book_id=<?php echo $res['book_ID'];?>&user_ID=<?php echo $_SESSION['user_ID']; ?>'" class="rating-item" data-rate="3"></li>
                                <li onclick="window.location.href='includes/star.php?clicked=4&book_id=<?php echo $res['book_ID'];?>&user_ID=<?php echo $_SESSION['user_ID']; ?>'" class="rating-item" data-rate="4"></li>
                                <li onclick="window.location.href='includes/star.php?clicked=5&book_id=<?php echo $res['book_ID'];?>&user_ID=<?php echo $_SESSION['user_ID']; ?>'" class="rating-item" data-rate="5"></li>
                            </ul>
                        </div>
                        <!-- message to the user about the rating -->
                         <?php 
                                if(isset($_SESSION['message'])):
                            ?>
                            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                                <?php 
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                ?>
                            </div>
                        <?php endif ?>
                  <!-- summary about the book -->
                        <p><?php echo $res['book_summary'];?></p>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
        </div>

    </section>

 <?php
    include("includes/footer.php");
?>