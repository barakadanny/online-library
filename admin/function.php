<?php
session_start();

// Include the configuration file
require_once "config.php";

//  Login section
    // define variable 
    $admin_user = $_POST['username'];
    $admin_pass = $_POST['password'];
  
if(isset($_POST['login'])){
    if($admin_pass == "" || $admin_pass == "")	{
        $err="fill your username and password first";
    }
    else{
        $sql = "SELECT * FROM admins WHERE admin_email='$admin_user' AND admin_password =sha1('$admin_pass')";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $_SESSION['login_user'] = $admin_user;
            header("location: index.php");
            echo "Your Login correct";
      }else {
        //  $error = "Your Login Name or Password is invalid";
         echo "Your Login Name or Password is invalid";
      }
    }
    // mysqli_close();
}

?>