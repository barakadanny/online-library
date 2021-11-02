<?php 
                        session_start();
                        // $_SESSION['login_user'];
                        if(!$_SESSION['login_user'])  {  
header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}
                    ?>
 <header class="topbar">
	 	<div class="top-navbar">
       <nav class="navbar navbar-expand-md navbar-light h-100 w-100 p-0">
          
          <div class="navbar-header h-100 d-flex">
            <a class="navbar-brand d-flex align-items-center h-100" href="index.php">

                <img src="img/logo2.png" alt="homepage" class="dark-logo" 
				style="width:40px; float:left;">

			  <span class="">
              <!--End Logo icon -->
                  <h4 class="mb-0"><b>DigiBook</b> design</h4>
				</span>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse h-100 d-flex">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item d-xl-none d-md-none d-lg-none">
                <a class="nav-link menu-toggle" id="menu-toggle" href="#">
					<i class="fa fa-bars ti-menu ti-close"></i></a>
                </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box d-none d-lg-block d-md-none">
               
				 <div class="xp-searchbar ml-3 ">
						     <form>
							    <div class="input-group">
								  <input type="search" class="form-control"
								  placeholder="Search">
								  <div class="input-group-append">
								     <button class="btn" type="submit" id="button-addon2">
									 <i class="fas fa-search"></i>
									 </button>
								  </div>
								</div>
							 </form>
						 </div>
				
               
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Profile -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown u-pro">
                <a class="nav-link   
				dropdown-toggle profile-pic" href="#" id="navbarDropdown" 
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="img/user.jpg" alt="user" class="">
                  <span class="hidden-md-down d-none">
                     
                    <?php 
                        echo($_SESSION['login_user'])
                        // $_SESSION['login_user'];
                    ?> &nbsp;
                  </span>
                  
                </a>
                 <ul class="dropdown-menu small-menu">
								     <li><a href="#">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">settings</span>
									 Settings
									 </a></li>
									 <li><a href="logout.php">
									 <span class="material-icons"></span>
									 Logout
									 </a></li>
									 
								  </ul>
              </li>
            </ul>
          </div>
		  
        </nav>
		</div>
		</header>
   <!--==============================================
     top-header end
	 ======================================-->



  