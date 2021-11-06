

<?php include("includes/header.php");?>

  <div class="main-wrapper">
  

	   <?php include("includes/topbar.php");?>

	 
	  
	  <!--==============================================
     sidebar
	 ======================================-->
	 
	  <!-- Sidebar  -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
			<li  class="dropdown">
                    <a href="index.php" class="dashboard">
					<i class="fas fa-tachometer-alt"></i>
					<span>Dashboard</span>
					</a>
                </li>
		
                <li class="active">
                    <a href="profile.php">
					<i class="far fa-user-circle"></i><span>Profile</span></a>
                   
                </li>
                
			   <li class="dropdown">
                    <a href="table.php">
					<i class="fas fa-table"></i><span>tables</span></a>
                    
                </li>
               
			   
			     <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="far fa-smile"></i>
					<span>icons</span></a>
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
                <li class="breadcrumb-item active">Profile</li>
              </ol>
            </div>
            <div class="col-md-7 ">
              <a href="" class="btn btn btn-info
			  float-right d-none d-lg-block d-md-block  hidden-sm-down text-white">
                Upgrade to Pro</a>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
            <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
              <div class="card">
                <div class="card-body">
                  <center class="mt-4">
                    <img src="img/user2.jpg" class="img-circle" width="150">
                    <h4 class="card-title mt-2">Vishweb Design</h4>
                    <h6 class="card-subtitle">Creative Website Designer</h6>
                  </center>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                <!-- Tab panes -->
                <div class="card-body">
                  <form class="form-horizontal form-material mx-2">
                    <div class="form-group">
                      <label class="col-md-12">Full Name</label>
                      <div class="col-md-12">
                        <input type="text" placeholder="Vishweb Design"
						class="form-control form-control-line">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="example-email" class="col-md-12">Email</label>
                      <div class="col-md-12">
                        <input type="email" placeholder="Vishwebdesign01@gmail.com" 
						class="form-control form-control-line" name="example-email" 
						id="example-email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Password</label>
                      <div class="col-md-12">
                        <input type="password" value="password" 
						class="form-control form-control-line">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Phone No</label>
                      <div class="col-md-12">
                        <input type="text" placeholder="123-456-789"
						class="form-control form-control-line">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Message</label>
                      <div class="col-md-12">
                        <textarea rows="5" class="form-control form-control-line"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">Select Country</label>
                      <div class="col-sm-12">
                        <select class="form-control form-control-line">
                          <option>India</option>
                          <option>Delhi</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button class="btn btn-info">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
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
          © 2021 Admin Dashboard by
          <a href="https://www.youtube.com/c/VishwebDesign">Vishweb Design</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
	
  </div>
  
  <?php include("footer.php");?>
  