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
                <!-- <li class="breadcrumb-item active">Manage Language</li> -->
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
                  <h4 class="card-title">Manage Language</h4>
                  <h6 class="card-subtitle">Add class <code>.genre</code></h6>
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
                  <form action="function.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row col-md-8 d-flex justify-content-between">
                      <div >
                        <label for="ex1">Language name</label>
                        <input class="form-control" name="language_name" id="ex1" type="text" placeholder="Enter book Language..."> <br>
                        <label for="exampleInputPassword1">Language image</label>
                        <input type="file" name="image">
                      </div>
                      
                    </div>
                    <button type="submit" name="language_add" class="btn btn-primary">Add Language</button>
                  </form>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>Language</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            require_once "config.php";
                            $selectquery="SELECT * FROM language";
                            $query = mysqli_query($con, $selectquery);
                            $nums = mysqli_num_rows($query);
                            
                            //  echo $res[0];
                            while($res = mysqli_fetch_array($query) ){
                              // echo $res['librarian_name']."</br>";
                            
                        ?>

                            <tr>
                          <!-- <td><?php echo $res['genre_ID']; ?></td> -->
                          <td><?php echo $res['language_name']; ?></td>
                          <td>
                            <a href="function.php?edit_language=<?php echo $res['language_ID'];?>" type="button"  class="btn btn-success">Update</a>
                            <a href="function.php?delete_language=<?php echo $res['language_ID']; ?>" type="button" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                              <?php
                              }             
                        ?>
                        </tr> -->
                      </tbody>
                    </table>
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
