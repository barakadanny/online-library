    <?php
    require_once "config.php";

    // queries
    // to count users
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows( $result );

    // to count books
    $book_sql ="SELECT * FROM book";
    $book_result= mysqli_query($con, $book_sql);
    $book_rowcount= mysqli_num_rows($book_result);

    // query to count librarians
    $librarian_sql="SELECT * FROM librarian";
    $librarian_result= mysqli_query($con, $librarian_sql);
    $librarian_rowcount= mysqli_num_rows($librarian_result);
    ?>

<?php include("includes/header.php");?>

  <div class="main-wrapper">
  

	   <?php include("includes/topbar.php");?>
     
	 
	 <!--==============================================
     sidebar
	 ======================================-->
	 
	  <!-- Sidebar  -->
        <?php include("includes/sidebar.php");?>
	 
	 <!---==============================================
       sidebar end
	 ======================================-->
	 
	 
	 
	 
	 <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <div class="row page-titles d-flex align-items-center">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor m-0">Dashboard</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="">Home</a>
                </li>
                <li class="breadcrumb-item active">Manage Librarians</li>
              </ol>
            </div>
            <div class="col-md-7 ">
              <!-- <a href="" class="btn waves-effect waves-light btn btn-info
			  float-right  d-none d-lg-block d-md-block                 hidden-sm-down                   text-white">
                Upgrade to Pro</a> -->
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
            
			<div class="row">
            <!-- column -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manage Librarians</h4>
                  <h6 class="card-subtitle">Add class <code>.Librarians</code></h6>
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
                  <!-- <h6 class="card-subtitle">Add class <code>.Librarians</code></h6> -->
                  <!-- input librarians field -->
                  <form action="function.php" method="POST">
                    <div class="form-group row col-md-8 d-flex justify-content-between">
                      <div class="col-xs-4">
                        <label for="ex1">Number of users</label> <br>
                        <label for="ex1"> <?php printf($rowcount); ?> </label>
                      </div>
                      <div class="col-xs-4">
                        <label for="ex2">Number of Books</label> <br>
                        <label for="ex1"> <?php printf($book_rowcount); ?></label>
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Number of Librarian</label><br>
                        <label for="ex1"> <?php printf($librarian_rowcount); ?></label>
                      </div>
                      
                    </div>
                  </form>

                  <div class="table-responsive">
                      
                  </div>
                  

                </div>
              </div>
            </div>
          </div>
			
			
          <!-- ============================================================== -->
          <!-- Projects of the Month -->
          <!-- ============================================================== -->
         
		 
		 
		 
          <!-- ============================================================== -->
          <!-- End Projects of the Month -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
         <footer class="footer">
          © 2021 
          <a href="#">digibook</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
	
  </div>
  
  <?php include("includes/footer.php");?>
  