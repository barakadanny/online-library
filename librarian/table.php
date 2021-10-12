

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
					<i class="fas fa-table"></i><span>tables</span></a>
                    
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
                <li class="breadcrumb-item active">Table Basic</li>
              </ol>
            </div>
            <div class="col-md-7 ">
              <a href="" class="btn waves-effect waves-light btn btn-info
			  float-right  d-none d-lg-block d-md-block                 hidden-sm-down                   text-white">
                Upgrade to Pro</a>
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
                  <h4 class="card-title">Basic Table</h4>
                  <h6 class="card-subtitle">Add class <code>.table</code></h6>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Deshmukh</td>
                          <td>Prohaska</td>
                          <td>@Genelia</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Deshmukh</td>
                          <td>Gaylord</td>
                          <td>@Ritesh</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Sanghani</td>
                          <td>Gusikowski</td>
                          <td>@Govinda</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Roshan</td>
                          <td>Rogahn</td>
                          <td>@Hritik</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Joshi</td>
                          <td>Hickle</td>
                          <td>@Maruti</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Nigam</td>
                          <td>Eichmann</td>
                          <td>@Sonu</td>
                        </tr>
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
          © 2021 Admin Dashboard by
          <a href="https://www.youtube.com/c/VishwebDesign">Vishweb Design</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
	
  </div>
  
  <?php include("footer.php");?>
  