

<?php include("header.php");  
 
?>

  <div class="main-wrapper">
  

	   <?php include("topbar.php");?>

	 
	  <!--==============================================
     sidebar
	 ======================================-->
	 
	  <!-- Sidebar  -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="index.php" class="dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                </li>
		
                <li class="dropdown">
                    <a href="profile.php">
					<i class="far fa-user-circle"></i><span>Profile</span></a>
                   
                </li>
                
                
				
			   
			          <li class="dropdown">
                    <a href="table.php">
					        <i class="fas fa-table"></i><span>Librarians</span></a>
                    
                </li>
               
			   
			          <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					          <i class="far fa-smile"></i><span>Emoji</span></a>
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
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <div class="col-md-7 ">
              <a href="" class="btn btn btn-info
			  float-right  d-none d-lg-block d-md-block hidden-sm-down  text-white">
                Upgrade to Pro</a>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
  

          <!-- ============================================================== -->
          <!-- Projects of the Month -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <h5 class="card-title">Projects of the Month</h5>
                    </div>
                    <div class="ml-auto">
                      <select class="form-select border-0 form-control b-0">
                        <option selected="">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive mt-3 no-wrap">
                    <table class="table vm no-th-brd pro-of-month">
                      <thead>
                        <tr>
                          <th colspan="2">Assigned</th>
                          <th>Name</th>
                          <th>Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width: 50px">
                            <span class="round">S</span>
                          </td>
                          <td>
                            <h6>Sunil Joshi</h6>
                            <small class="text-muted">Web Designer</small>
                          </td>
                          <td>Elite Admin</td>
                          <td>$3.9K</td>
                        </tr>
                        <tr class="active">
                          <td>
                            <span class="round"><img src="./img/user2.jpg" alt="user" 
							width="50"></span>
                          </td>
                          <td>
                            <h6>Andrew</h6>
                            <small class="text-muted">Project Manager</small>
                          </td>
                          <td>Real Homes</td>
                          <td>$23.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-success">B</span></td>
                          <td>
                            <h6>Bhavesh patel</h6>
                            <small class="text-muted">Developer</small>
                          </td>
                          <td>MedicalPro Theme</td>
                          <td>$12.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-primary">N</span></td>
                          <td>
                            <h6>Nirav Joshi</h6>
                            <small class="text-muted">Frontend Eng</small>
                          </td>
                          <td>Elite Admin</td>
                          <td>$10.9K</td>
                        </tr>
                        <tr>
                          <td><span class="round round-warning">M</span></td>
                          <td>
                            <h6>Micheal Doe</h6>
                            <small class="text-muted">Content Writer</small>
                          </td>
                          <td>Helping Hands</td>
                          <td>$12.9K</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="up-img" style="background-image: url(./img/card2.jpg)"></div>
                <div class="card-body">
                  <h5 class="card-title">Business development of rules</h5>
                  <span class="label label-info label-rounded">Technology</span>
                  <p class="mb-0 mt-3">
                    Titudin venenatis ipsum aciat. Vestibu ullamer quam. nenatis
                    ipsum ac feugiat. Ibulum ullamcorper.
                  </p>
                  <div class="d-flex mt-3">
                    <a class="link" href="">Read more</a>
                    <div class="ml-auto align-self-center">
                      <a href="javascript:void(0)" class="link me-2">
					  <i class="fa fa-heart-o"></i></a>
                      <a href="javascript:void(0)" class="link me-2">
					  <i class="fa fa-share-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
  