<?php

if(!isset($_SESSION['librarian_ID']) && !isset($_SESSION['librarian_name'])){
    header('Location:login.php');
    exit();
}
?>