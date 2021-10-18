<?php
require('config.php');
require('functions.php');
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

            extract($_POST);
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

            $check_email= "SELECT * FROM user WHERE user_name='$user_name'";
            if($check_email){
                $errors[] = "User name already used";
            }

            $check_email= "SELECT * FROM user WHERE user_email='$user_email'";
            if($check_email){
                $errors[] = "Email Address already used";
            }
            // if($errors == 0){
            // activation email
                $to = $user_email;
                $subject = WEBSITE_NAME."- ACCOUNT ACTIVATION";
                $token= sha1($user_name.$user_email.$user_password);

                // ob_start is like a virtual memory
                ob_start(); 
                require('../templates/emails/activation.tmpl.php');
                $content = ob_get_clean();

                $headers = "From: 18j01acs005@anu.ac.ke";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
                

                mail($to, $subject, $content, $headers);
                // Inform to verify his/her email inbox
                echo "mail sent";
            

            // if(count($errors) == 0){
            //     // activation email
            //     $to = $user_email;
            //     $subject = WEBSITE_NAME."- ACCOUNT ACTIVATION";
            //     $token= sha1($user_name.$user_email.$user_password);

            //     // ob_start is like a virtual memory
            //     ob_start(); 
            //     require('../templates/emails/activation.tmpl.php');
            //     $content = ob_get_clean();

            //     $headers = 'MIME-Version: 1.0'."\r\n";
            //     $headers .='Content-type: text/html; charset=iso-8859-1'."\r\n";

            //     mail($to, $subject, $content, $headers);
            //     // Inform to verify his/her email inbox
            //     echo "mail sent";
            // }
            // }
            
        }else{
            $errors[]= "Please fil all the data ⚠";
        }
    }
?>
<?php 
    //require("header.php");
        require('../register.php');
    //header("location: ../register.php");
?>