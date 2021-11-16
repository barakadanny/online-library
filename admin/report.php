

<?php include("includes/header.php");?>

  <div class="main-wrapper">
  

	   <?php include("includes/topbar.php");?>
     
    <?php
        $name='';
        $email='';
?>
	 
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
                        <label for="ex1">Librarian Name</label>
                        <!-- value="<?php echo $name; ?>" -->
                        <input class="form-control" name="lib_name" id="ex1" type="text" value="<?php echo $name; ?>"  placeholder="Enter name...">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex2">Email</label>
                        <!-- value="<?php echo $email; ?>" -->
                        <input class="form-control" name="lib_email" id="ex2" type="text" value="<?php echo $email; ?>"  placeholder="Enter email...">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Password</label>
                        <input class="form-control" name="lib_password" id="ex3" type="text" placeholder="Enter password...">
                      </div>
                      
                    </div>
                    <button type="submit" name="lib_add" class="btn btn-primary">submit</button>
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
  