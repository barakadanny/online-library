

<?php include("header.php");?>

  <div class="main-wrapper">
  

	   <?php include("topbar.php");?>
     

	 
	 <!--==============================================
     sidebar
	 ======================================-->
	 
	  <!-- Sidebar  -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
			<li  class="dropdown">
                    <a href="index.php" class="dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                </li>
		
                <li class="dropdown">
                    <a href="profile.php">
					<i class="far fa-user-circle"></i><span>Profile</span></a>
                   
                </li>
                
			   <li class="active">
                    <a href="table.php">
					<i class="fas fa-table"></i><span>Librarians</span></a>
                    
                </li>
               
			   
			     <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="far fa-smile"></i><span>icons</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
               <li class="">
                    <a href="#"><i class="fas fa-globe-asia"></i><span>Map</span></a>
                </li>
				
				 <li  class="">
                    <a href="#"><i class="far fa-bookmark"></i><span>Blank</span></a>
                </li>
                <li  class="">
                    <a href="#"><i class="fas fa-question-circle"></i><span>404</span></a>
                </li>
               
               
            </ul>

           
        </nav>
	 
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
                        <input class="form-control" name="lib_name" id="ex1" type="text"  placeholder="Enter name...">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex2">Email</label>
                        <!-- value="<?php echo $email; ?>" -->
                        <input class="form-control" name="lib_email" id="ex2" type="text"  placeholder="Enter email...">
                      </div>
                      <div class="col-xs-4">
                        <label for="ex3">Password</label>
                        <input class="form-control" name="lib_password" id="ex3" type="text" placeholder="Enter password...">
                      </div>
                      
                    </div>
                    <button type="submit" name="lib_add" class="btn btn-primary">submit</button>
                  </form>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                                            <?php
                            require_once "config.php";
                            $selectquery="SELECT * FROM librarian";
                            $query = mysqli_query($con, $selectquery);
                            $nums = mysqli_num_rows($query);
                            
                            //  echo $res[0];
                            while($res = mysqli_fetch_array($query) ){
                              // echo $res['librarian_name']."</br>";
                            
                            ?>

                            <tr>
                          <td><?php echo $res['librarian_ID']; ?></td>
                          <td><?php echo $res['librarian_name']; ?></td>
                          <td><?php echo $res['librarian_email']; ?></td>
                          <td><?php echo $res['librarian_password']; ?></td>
                          <td>
                            <a href="function.php?edit=<?php echo $res['librarian_ID'];?>" type="button"  class="btn btn-success">Update</a>
                            <a href="function.php?delete=<?php echo $res['librarian_ID']; ?>" type="button" class="btn btn-danger">Delete</a>
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
  