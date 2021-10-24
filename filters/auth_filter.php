<?php

if(!isset($_SESSION['user_ID']) && !isset($_SESSION['user_name'])){
    header('Location:login.php');
    exit();
}
?>