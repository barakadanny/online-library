<?php
session_start();
require('includes/config.php');
require('includes/functions.php');

//require('constants.php');



    if(isset($_POST['user_login'])){
        
        // check empty fild
        // ['user_name', 'user_email', 'user_password', 'user_confirmPass']
        $user_name = $_POST['user_login_password'];
        $user_password = sha1($_POST['user_login_password']);
        if(!empty($user_name) && !empty($user_password)){
            $q= "SELECT user_ID FROM user WHERE (user_name='$user_name' OR user_email='$user_name') AND user_password='$user_password' AND active='1' ";
            $result = mysqli_query($con, $q);

                var_dump($result);
            //$userHasBeenFound = $q->rowCount();
            // if($result){
            //     header('Location: profile.php');
            // }else{
            //     set_flash("Wrong credentials ", 'danger');
            // }

        }
 
    }else{
        clear_input_data();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        DigiBook Login
    </title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">   
    <link rel="stylesheet" href="assets/css/single-book.css">
    <link rel="stylesheet" href="assets/css/single-category.css">
    <link rel="stylesheet" href="assets/css/books-explore.css">  
</head>
<body>
    <?php include('partials/_flash.php'); ?>
                <div class="container pt-2">
                    <?php
                                if(isset($errors) !=0){
                                  echo '<div class="alert alert-danger">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true" aria-label="Close">
                                        &times;
                                    </button>';
                                    foreach($errors as $error){
                                      echo $error.'<br/>';
                                    }
                                    echo '</div>';
                                }

                      ?>
                    <div class="d-flex justify-content-center col-md-10 mt-5">
                            
                                        <!-- includes/register.code.php -->
                        <form action="" method="post" autocomplete="off">
                          <!-- user name here -->
                            <div class="form-group">
                              <label for="exampleInputEmail1">User name or mail <address></address></label>
                              <input autocomplete="false"  type="text" name="user_login_n" class="form-control" id="" placeholder="Enter your name or your address mail" required>
                            </div>
                            <!-- password here -->
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="user_login_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="signIn-link">
                                <P>Already an Account? <a href="#" >Please Click here to signIn.</a></P>
                            </div>
                            <button type="submit" name="user_login" class="signUp-btn">Login</button>
                        </form>
                    </div>
                </div>
                            </body>
                            </html>
         