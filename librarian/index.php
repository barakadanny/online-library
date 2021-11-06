<?php
require_once "includes/config.php";
include('function.php'); ?>
<?php


    if(!empty($_GET['id'])){
        //fetch data about the user using his identification 
        // by using a function (find_user_by_ID)
        $user = find_librarian_by_id($_GET['id']);
        if(!$user){
            header('Location:login.php');
        }

    }else{
        header('Location:index.php?id='.$_SESSION['librarian_ID']);
    }

	// add book function
if(isset($_POST['add_book'])){
    $booktitle = $_POST['book_title'];
    //$bookimage = $_POST['book_image'];
    $bookyear = $_POST['book_year'];
    $bookauthor = $_POST['book_author'];
    $booksummary = $_POST['book_summary'];
    $bookgenre = $_POST['book_genre'];

	$id = (int)$_GET['id'];

	if(!empty($_FILES["image"]["tmp_name"])){
		// action for the image file
		$fileinfo=PATHINFO($_FILES["image"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;

		// action for the book pdf file pdf
		$temp = explode(".", $_FILES["pdf_file"]["name"]);
		$extension = end($temp);
		$upload_pdf=$_FILES["pdf_file"]["name"];
		move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"book_pdf/" . $_FILES["pdf_file"]["name"]);

		// insertion to the data base
		if(!empty($booktitle) && !empty($bookauthor) && !empty($bookyear) && !empty($booksummary) && !empty($bookgenre) ){
			
			$sql = "INSERT INTO `book`(`book_title`, `book_author`, `book_year`, `book_summary`,`book_image`,`book_pdf`, `genre_ID`, `librarian_ID`) 
						VALUES ('$booktitle','$bookauthor','$bookyear','$booksummary','$location','$upload_pdf','$bookgenre','$id')";
			$result = mysqli_query($con, $sql);
			if($result==1){
				$_SESSION['message']="Book inserted successfully";
				$_SESSION['msg_type']="success";
			}else{
				$_SESSION['message']="⚠ failed to insert book";
				$_SESSION['msg_type']="danger";
			}
	
			// $id = (int)$_GET['id'];
			// echo $id;
		}else{
			$_SESSION['message']="⚠ All field are required!";
			$_SESSION['msg_type']="danger";
		}
	}else{
		$_SESSION['message']="No image has been selected";
		$_SESSION['msg_type']="danger";
	}
}

// function to update a book
// if(isset($_GET['edit_book'])){
//     $id= $_GET['edit_book'];
//     $sql = "SELECT * FROM book WHERE book_ID='$id' ";
//     $result= mysqli_query($con, $sql);
//     // $res = count($result);
//     if($row = mysqli_fetch_array($result)){
        
//         $bookTitle = $row['book_title'];
//         $bookAuthor= $row['book_author'];
//         $bookYear= $row['book_year'];
//         $bookSummary = $row['book_summary'];
//         $bookImage = $row['book_image'];
//         $bookPdf = $row['book_pdf'];
//         header("location: index.php");
//     }
// }
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
							<a href="#">WELCOME</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="#"><?= $user->librarian_name ?></a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
				<!-- form to add books -->
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
                        <input type="text" name="book_title" class="form-control"  placeholder="Book name...">
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
                        <input type="text" name="book_year"  class="form-control" placeholder="Book year...">
                      </div>
                      <div class="form-group">
                        <input type="text" name="book_author"  class="form-control" placeholder="Author here...">
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
                        <textarea class="form-control" name="book_summary" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
					  <button type="submit" name="add_book" class="btn btn-primary">Add book</button>
					  <!-- summary editor -->
					  <!-- <div class="row mb-4 ml-4">
						
				<!-- end of the form to add books -->
			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Books Added By <?= $user->librarian_name ?></h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Book Title</th>
								<th>Author</th>
								<th>Year</th>
								<!-- <th>Summary</th> -->
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$id = (int)$_GET['id'];
								$q="SELECT * FROM book WHERE librarian_ID='$id' ";
								$result = mysqli_query($con, $q);
								while($res = mysqli_fetch_array($result) ){
							?>
							<tr>
								<td>
									<img src="<?php echo $res['book_image'];?>">
									<p><?php echo $res['book_title'];?></p>
								</td>
								<td><?php echo $res['book_author'];?></td>
								<td><?php echo $res['book_year'];?></td>
								<!-- <td></td> -->
								<td>01-10-2021</td>
								<td>
									<a href="edit.php?edit_book=<?php echo $res['book_ID'];?>" type="button"  class="btn btn-success">Edit</a>
									<a href="index.php?delete_book=<?php echo $res['book_ID']; ?>" type="button" class="btn btn-danger">Delete</a>
								</td>
								<!-- <td><span class="status completed">Completed</span></td> -->
							</tr>
								<?php
								}
								?>
						</tbody>
					</table>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
<?php include('footer.php'); ?>