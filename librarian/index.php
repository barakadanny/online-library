

<?php include("header.php");?>

  <div class="main-wrapper">
  

	   <?php include("topbar.php");?>

	 
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
                      <h5 class="card-title">Add a book from here.</h5>
                    </div>
                  </div>
                  <div class="table-responsive mt-3 no-wrap">
                    <form>
                      <div class="form-group">
                        <input type="text" autocomplete="false" class="form-control"  placeholder="Book name...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Book image</label>
                        <input type="file" class="form-control-file" >
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Book year...">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Author here...">
                      </div>
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Book Genre</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Book Summary</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Add book</button>
                    </form>
                    <table class="table vm no-th-brd pro-of-month">
                      <thead>
                        <tr>
                          <th colspan="2">Book title</th>
                          <th>image</th>
                          <th>Book year</th>
                          <th>Book Author</th>
                          <th>Book genre</th>
                          <th>Book Summary</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width: 50px">
                            book
                          </td>
                          <td>
                            <h6>Sunil Joshi</h6>
                          </td>
                          <td>Elite Admin</td>
                          <td>Elite Admin</td>
                          <td>Elite Admin</td>
                          <td>Elite Admin</td>
                          <td>Elite Admin</td>
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
                <div class="up-img"></div>
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
          © 2021 
          <a href="">DigiBook</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
	
  </div>
  
  <?php include("footer.php");?>
  