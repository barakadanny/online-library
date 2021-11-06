<?php
require_once "includes/config.php";
// include('function.php'); 
?>
<?php
// if(!empty($_GET['id'])){
//         //fetch data about the user using his identification 
//         // by using a function (find_user_by_ID)
//         $user = find_librarian_by_id($_GET['id']);
//         if(!$user){
//             header('Location:login.php');
//         }

//     }else{
//         header('Location:index.php?id='.$_SESSION['librarian_ID']);
//     }

// function to update a book
if(isset($_POST['update_book'])){
    $id = $_POST['book_id'];
    $booktitle = $_POST['book_title'];
    $bookyear = $_POST['book_year'];
    $bookauthor = $_POST['book_author'];
    $booksummary = $_POST['book_summary'];

    $sql = "UPDATE book SET 
            book_title ='$booktitle', book_author ='$bookauthor', book_year ='$bookyear' WHERE book_ID='$id' ";
    $query = mysqli_query($con, $sql);

    $_SESSION['message']="Book Updated successfully";
	$_SESSION['msg_type']="success";
}
?>
<?php include('header.php'); ?>


	<!-- SIDEBAR -->
	<?php include('side-bar.php'); ?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include('top-nav.php'); ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Edit Book</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
				<!-- form to add books -->
                <?php 
                $query = 'SELECT * FROM book
                            WHERE
                            book_ID ='.$_GET['edit_book'];
                            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                            while($row = mysqli_fetch_array($result))
                            {   
                                $bookid = $row['book_ID'];
                                $bookTitle = $row['book_title'];
                                $bookAuthor= $row['book_author'];
                                $bookYear= $row['book_year'];
                                $bookSummary = $row['book_summary'];
                                $bookImage = $row['book_image'];
                                $bookPdf = $row['book_pdf'];
                            
                            }
                            
                            // $id = $_GET['id'];
                        
                ?>
				<form action="" method="POST" enctype="multipart/form-data">
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
                  <div class="form-group">
                        <input type="hidden" name="book_id" value="<?php echo $bookid ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="text" name="book_title" value="<?php echo $bookTitle ?>" class="form-control"  placeholder="Book name...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Book image</label>
                        <input type="file" name="image">
                      </div>
					  <div class="form-group">
                        <label for="exampleInputPassword1">Book pdf</label>
                        <input type="file" name="pdf_file" accept="application/pdf">
                      </div>
                      <div class="form-group">
                        <input type="text" name="book_year" value="<?php echo $bookYear ?>" class="form-control" placeholder="Book year...">
                      </div>
                      <div class="form-group">
                        <input type="text" name="book_author" value="<?php echo $bookAuthor ?>" class="form-control" placeholder="Author here...">
                      </div>
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Book Genre</label>
                        <select class=" mr-sm-2" name="book_genre" id="inlineFormCustomSelect">
                          <option selected>Please select genre...</option>
                          <?php
                            
                            $selectquery="SELECT * FROM genre";
                            $query = mysqli_query($con, $selectquery);
                            $nums = mysqli_num_rows($query);
                            
                            while($res = mysqli_fetch_array($query) ){
                              
                            ?>
                            <option value="<?php echo $res['genre_ID'] ?>"><?php echo $res['genre_name']; ?></option>
                              <?php
                                }             
                          ?>
                          <!-- <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option> -->
                        </select>
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleFormControlTextarea1">Book Summary</label>
                        <textarea class="form-control" name="book_summary" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div> -->
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Book Summary</label>
                        <textarea class="form-control" name="book_summary" value="<?php echo $bookSummary ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
					  <button type="submit" name="update_book" class="btn btn-primary">Update book</button>
					  <a href="index.php" class="btn btn-primary">Cancel</a>
					  <!-- summary editor -->
					  <!-- <div class="row mb-4 ml-4">
						
				<-- end of the form to add books -->


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
<?php include('footer.php'); ?>