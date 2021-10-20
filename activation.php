<?php
require('includes/config.php');
require('includes/functions.php');

$user_name=$_GET['username'];
$token=$_GET['token'];
$check_name= "SELECT * FROM user WHERE user_name='$user_name'";
$result_name = mysqli_query($con, $check_name);
$query = mysqli_num_rows($result_name);

//var_dump($token);

if(!empty($user_name) && $query > 0 && !empty($token)){
    echo "ca marche";

    global $con;
    $sql= "SELECT user_email, user_password FROM user WHERE user_name=?";
    $query = mysqli_query($con, $sql);

    $data= $query->fetch_object();
    //die($data->user_email);

   //var_dump($count);
}else{
    //header('Location:index.php');
    echo "ca marche pas";
}