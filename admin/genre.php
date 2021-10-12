

<?php include("header.php");?>

  <div class="main-wrapper">
  

	   <?php include("topbar.php");?>
     
    <?php
        $name='';
        $email='';
?>
	 
	 <!--==============================================
     sidebar
	 ======================================-->
	 
	  <!-- Sidebar  -->
        <?php include("sidebar.php");?>
	 
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
                  <h4 class="card-title">Manage Books Genre</h4>
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
                  <form action="function.php" method="POST">
                    <div class="form-group row col-md-8 d-flex justify-content-between">
                      <div >
                        <label for="ex1">Genre Title</label>
                        <!-- value="<?php echo $name; ?>" -->
                        <input class="form-control" name="genre_name" id="ex1" type="text" placeholder="Enter book genre...">
                      </div>
                      
                    </div>
                    <button type="submit" name="genre_add" class="btn btn-primary">Add Genre</button>
                  </form>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>Genre Title</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                                            <?php
                            require_once "config.php";
                            $selectquery="SELECT * FROM genre";
                            $query = mysqli_query($con, $selectquery);
                            $nums = mysqli_num_rows($query);
                            
                            //  echo $res[0];
                            while($res = mysqli_fetch_array($query) ){
                              // echo $res['librarian_name']."</br>";
                            
                            ?>

                            <tr>
                          <!-- <td><?php echo $res['genre_ID']; ?></td> -->
                          <td><?php echo $res['genre_name']; ?></td>
                          <td>
                            <a href="function.php?edit=<?php echo $res['genre_ID'];?>" type="button"  class="btn btn-success">Update</a>
                            <a href="function.php?delete=<?php echo $res['genre_ID']; ?>" type="button" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                              <?php
                              }             
                        ?>
                        
                        

                        <!-- <tr>
                          <td>1</td>
                          <td>Deshmukh</td>
                          <td>Prohaska</td>
                          <td>@Genelia</td>
                          <td>
                            <button type="button" class="btn btn-success">Update</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </td>
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
  
  <?php include("footer.php");?>
  