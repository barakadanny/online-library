<?php $title="Books"; ?>
<?php session_start(); ?>
<?php 
    include("includes/constants.php");
    include("includes/functions.php");
// connection to the database
    require_once "includes/config.php";
?>
<?php 
    include("includes/header.php");
?>
    
<?php
    include("includes/navigation.php");
?>
<?php
// code to display books list on the page

?>

     <!-- Single category search section -->
     <section id="single-category">
        <div class="container">
            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">English</h2>
            </div>
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

     <!-- single category table -->
     <section id="single-category__table">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <table id="myTable" class="tbody">
                        <tr class="header">
                          <th style="width:60%;">Name</th>
                          <th style="width:40%;">Author</th>
                        </tr>
                        <?php
                          $id = (int)$_GET['genre_ID'];
                          $q= "SELECT * FROM book WHERE genre_ID='$id' ";
                          $result= mysqli_query($con, $q);
                          while($res=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                          <td><a href="single-book.php?book_ID=<?php echo $res['book_ID']; ?>" class="view-book__link"><?php echo $res['book_title'];?></a></td>
                          <td><?php echo $res['book_author'];?></td>
                        </tr>
                        <?php
                          }
                          ?>

                      </table>
                      <section class="pagination-section">
                          <div>
                            <p> View item in a page:</p>
                            <select name="" id="">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                          </div>
                          <ul class="pagination-list">
                              <li class="page-list"><a class="prev" href="#" id="prev">&#139;</a></li>
                              <li class="page-list"><a class="next" href="#" id="next">&#155;</a></li>
                          </ul>
                      </section>
                </div>
            </div>
        </div>
     </section>

 <?php
    include("includes/footer.php");
?>   