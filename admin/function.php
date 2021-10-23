<?php
session_start();


// Include the configuration file
require_once "config.php";

//  Login section
    // define variable 
    
  
if(isset($_POST['login'])){
    $admin_user = $_POST['username'];
    $admin_pass = $_POST['password'];
    if($admin_pass == "" || $admin_pass == "")	{
        echo "fill your username and password first";
    }
    else{
        $sql = "SELECT * FROM admins WHERE admin_email='$admin_user' AND admin_password =sha1('$admin_pass')";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $_SESSION['login_user'] = $admin_user;
            header("location: profile.php");
      }else {
        //  $error = "Your Login Name or Password is invalid";
         echo "Your Login Name or Password is invalid";
      }
    }
    // mysqli_close();
}

//add librarians
    // check if the user clicked the add button
 if(isset($_POST['lib_add'])){
    //  retrieve all the input fields
    if(empty($_POST['lib_name']) or empty($_POST['lib_email']) or empty($_POST['lib_password'])){
        header("location: table.php");
        $_SESSION['message']="⚠ All field are required!";
         $_SESSION['msg_type']="danger";
    }else{

        $libname = $_POST['lib_name'];
        $libemail = $_POST['lib_email'];
        $libpassword = $_POST['lib_password'];
   
        
        $sql = "INSERT INTO librarian values('','$libname','$libemail',sha1('$libpassword'))";
        $query = mysqli_query($con, $sql);
        if($query==1){
            $_SESSION['message']="Record has been saved Successfully!";
            $_SESSION['msg_type']="success";
            header("location: table.php");
        }else{
            echo "Failed to insert Data";
        }
    }
 }

//   <!-- delete a librarian -->
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM librarian WHERE librarian_ID=$id";
    $query= mysqli_query($con, $sql);

    $_SESSION['message']="Record has been deleted Successfully!";
     $_SESSION['msg_type']="danger";
     header("location: table.php");
}
// update a librarian
if(isset($_GET['edit'])){
    $id = $_GET['edit'];

     $sql = "SELECT * FROM librarian WHERE librarian_ID=$id";
    $query= mysqli_query($con, $sql);
    $record = mysqli_num_rows($query);
    if($record==1){
        $row = mysqli_fetch_array($query);

        $name = $row['librarian_name'];
        $email = $row['librarian_email'];
    }else{
        $_SESSION['message']="An error Occurred please try again or contact the admin!";
         $_SESSION['msg_type']="danger";
         exit();
    }
}

// add genre of books
if(isset($_POST['genre_add'])){
    if(empty($_POST['genre_name'])){
        header("location: genre.php");
        $_SESSION['message']="⚠ All field are required!";
        $_SESSION['msg_type']="danger";
    }else{
        $genrename = $_POST['genre_name'];

        $sql = "INSERT INTO genre values ('', '$genrename')";
        $query = mysqli_query($con, $sql);
        if($query==1){
            $_SESSION['message']="Record has been saved successfully !";
            $_SESSION['msg_type']="success";
            header("location: genre.php");
        }else{
            echo "Failed to insert Data";
        }
    }
}

 ?>

 