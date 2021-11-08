

<?php include("includes/header.php");  
 
?>

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
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <div class="col-md-7 ">
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
                          <th colspan="2">Profile name</th>
                          <th>Email</th>
                          <th>News Subscription Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width: 50px">
                            <span class="round">S</span>
                          </td>
                          <td>
                            <h6>Sunil Joshi</h6>
                          </td>
                          <td>barakadan421@gmail.com</td>
                          <td>true</td>
                        </tr>
                        <tr>
                          <td><span class="round round-success">B</span></td>
                          <td>
                            <h6>Bhavesh patel</h6>
                          </td>
                          <td>test@gmail.com</td>
                          <td>False</td>
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
                <div class="up-img" style="background-image: url(./img/users.png)"></div>
                <div class="card-body">
                  <h5 class="card-title">Manage users from this page</h5>
                  <span class="label label-info label-rounded">Technology</span>
                  <p class="mb-0 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Mollitia dolores quia perspiciatis eveniet a ipsa sapiente.
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
          © 2021
          <a href="#">digibook</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
	
  </div>
  
  <?php include("includes/footer.php");?>
  