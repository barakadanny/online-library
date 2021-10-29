<?php
session_start();
//include("filters/guest_filter.php");
require('includes/config.php');

//require('constants.php');



    // login action from librarian
if(isset($_POST['login'])){
    if(empty($_POST['email']) or empty($_POST['password'])){
        header("location: login.php");
        $_SESSION['message']="⚠ All field are required !";
         $_SESSION['msg_type']="danger";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM librarian WHERE librarian_email='$email' AND librarian_password=sha1('$password') ";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count==1){

            $rows=$result->fetch_object();
            $_SESSION['librarian_ID']= $rows->librarian_ID;
            $_SESSION['librarian_name']= $rows->librarian_name;

            header("location: index.php?id=".$rows->librarian_ID);
        }else{
            header("location: login.php");
            $_SESSION['message']="⚠ Invalid Data !";
            $_SESSION['msg_type']="danger";
        }
    }
    
}

    // function to find a librarian by his/ her id
    if(!function_exists('find_librarian_by_id')){
        function find_librarian_by_id($id){
            global $con;

            $q= "SELECT * FROM librarian WHERE librarian_ID='$id'";
            //$result = mysqli_query($con, $q);
            $result = $con->query($q);
            //$count = mysqli_num_rows($result);
            $data=$result->fetch_object();
            return $data;
        }
    }

//     if(isset($_POST['add_book'])){
//     $booktitle = $_POST['book_title'];
//     // $bookimage = $_POST['book_image'];
//     // $bookyear = $_POST['book_year'];
//     $bookauthor = $_POST['book_author'];
//     // $booksummary = $_POST['book_summary'];
//     // $bookgender = $_POST['book_gender'];

//     // insertion to the data base
//     if(!empty($booktitle) && !empty($bookauthor) ){
//         echo "right here"; 
//         $id = (int)$_GET['id'];
//         echo $id;
//     }else{
//         echo "all field are required";
//     }

// }
?>