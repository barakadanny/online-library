
<!-- sign-up section -->
    
        <div class="modal fade" id="mymodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center">Welcome to DigiBook</h3>
                        <a href="#" class="close" data-dismiss="modal"> &times; </a>
                    </div>
                    <div class="modal-body">
                      <?php
                        // if(isset($errors) !=0){
                        //   echo '<div class="bg-danger">';
                        //     foreach($errors as $error){
                        //       echo $error.'<br/>';
                        //     }
                        //     echo '</div>';
                        // }

                      ?>
                        <form action="includes/register.code.php" method="post" autocomplete="off">
                          <!-- user name here -->
                            <div class="form-group">
                              <label for="exampleInputEmail1">User name</label>
                              <input autocomplete="false" type="text" name="user_name" class="form-control" id="" placeholder="Enter name" required>
                            </div>
                            <!-- email here -->
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <!-- password here -->
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="user_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <!-- password confirmation here -->
                            <div class="form-group">
                              <label for="exampleInputPassword1">Confirm Password</label>
                              <input type="password" name="user_confrimPass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="signIn-link">
                                <P>Already an Account? <a href="#" >Please Click here to signIn.</a></P>
                            </div>
                            <button type="submit" name="user_signUp" class="signUp-btn">SignUp...</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>