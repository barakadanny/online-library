<?php
session_start();
require('includes/config.php');
require('includes/functions.php');

//require('constants.php');



    if(isset($_POST['user_login'])){
        
        $user_name = $_POST['user_login_name'];
        $user_password = $_POST['user_login_password'];
         if(!empty($user_name) && !empty($user_password)){
        //if(!empty($user_name)){
            $q= "SELECT user_ID FROM user WHERE (user_name='$user_name' OR user_email='$user_name') AND user_password=sha1('$user_password') AND active='1' ";
            $result = mysqli_query($con, $q);
            $count = mysqli_num_rows($result);
                if($count == 1) {
                    // $_SESSION['user_ID']= 
                    $rows=$q->fetch_all(MYSQLI_ASSOC);
                    die($rows->user_ID);
                    header("location: profile.php");
                }else {
                    $_SESSION['message']="Error connecting to the server";
                    $_SESSION['msg_type']="danger";
            }
             //echo "No empty field";
            $_SESSION['message']="⚠ Your Login Name or Password is invalid!";
            $_SESSION['msg_type']="danger";
        }else{
            $_SESSION['message']="⚠ All field are required!";
            $_SESSION['msg_type']="danger";
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
                    if(isset($_SESSION['message'])):
                  ?>
                  <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                      <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                      ?>
                  </div>
                  <?php endif ?>
                    <div class="d-flex justify-content-center col-md-10 mt-5">
                            
                                        <!-- includes/register.code.php -->
                        <form action="" method="post" autocomplete="off">
                          <!-- user name here -->
                            <div class="form-group">
                              <label for="exampleInputEmail1">User name or mail <address></address></label>
                              <input autocomplete="off"  type="text" name="user_login_name" class="form-control" id="" placeholder="Enter your name or your address mail" required>
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
         