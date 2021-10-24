<?php
session_start();
include("filters/guest_filter.php");
require('includes/config.php');
require('includes/functions.php');

//require('constants.php');



    if(isset($_POST['user_signUp'])){
        
        // check empty fild
        // ['user_name', 'user_email', 'user_password', 'user_confirmPass']
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_confirmPass = $_POST['user_confrimPass'];
        if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !empty($user_confirmPass)){
            $errors = [];

            //extract($_POST);
            if(mb_strlen($user_name)<3){
                $errors[] ="User name too short! (minimum 3 characters)";
            }

            if(! filter_var($user_email, FILTER_VALIDATE_EMAIL)){
                $errors[]="Invalid address mail!";
            }

            if(mb_strlen($user_password)<6){
                $errors[] ="User Password too short! (minimum 6 characters)";
            }else{
                if($user_password != $user_confirmPass){
                    $errors[]= "The Two Passwords do not much! ";
                }
            }

            $check_name= "SELECT * FROM user WHERE user_name='$user_name'";
            $result_name = mysqli_query($con, $check_name);
            if(mysqli_num_rows($result_name) > 0){
                $errors[] = "User name already used";
            }

            $check_email= "SELECT * FROM user WHERE user_email='$user_email'";
            $result_email = mysqli_query($con, $check_email);
            if(mysqli_num_rows($result_email) > 0){
                $errors[] = "Email Address already used";
            }
             if(count($errors) == 0){
            // activation email
            require('includes/constants.php');
                $to = $user_email;
               // $subject = WEBSITE_NAME."- ACCOUNT ACTIVATION";
               $subject ="DigiBook - ACCOUNT ACTIVATION";
                $token= sha1($user_name.$user_email.$user_password);

                // ob_start is like a virtual memory
                ob_start(); 
                require('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();

                $headers = "From: 18j01acs005@anu.ac.ke";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
                

                mail($to, $subject, $content, $headers);
                // Inform to verify his/her email inbox
                set_flash("Activation mail sent to: ".$user_email, 'success');

                $sql = "INSERT INTO user(user_name, user_email, user_password) values('$user_name','$user_email',sha1('$user_password'))";
                $query = mysqli_query($con, $sql);

                header('Location:register.php');
                exit();
            }else{
                save_input_data();
            }
            //echo count($errors);
            
        }else{
            $errors[]= "Please fil all the data ⚠";
            save_input_data();
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
        DigiBook Register
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
                              <label for="exampleInputEmail1">User name</label>
                              <input autocomplete="false" value="<?= get_input('user_name'); ?>" type="text" name="user_name" class="form-control" id="" placeholder="Enter name" required>
                            </div>
                            <!-- email here -->
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" value="<?= get_input('user_email'); ?>" name="user_email" class="form-control"  placeholder="Enter email">
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
                            </body>
                            </html>
         