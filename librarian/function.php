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

// function to delete a book 
// function to delete a book 
if(isset($_GET['delete_book'])){

    $id=$_GET['delete_book'];
    $sql= "DELETE FROM book WHERE book_ID='$id' ";
    $query= mysqli_query($con, $sql);
    if($query==1){
        $_SESSION['message']="Book has been deleted successfully !";
        $_SESSION['msg_type']="success";
        header("location: index.php");
        }else{
            $_SESSION['message']="Book Failed to delete !";
            $_SESSION['msg_type']="danger";
            header("location: index.php");
        }

    // header("Location: genre.php");

}
// function to update a book
// if(isset($_GET['edit_book'])){
//     $id= $_GET['edit_book'];
//     $sql = "SELECT * FROM book WHERE book_ID='$id' ";
//     $result= mysqli_query($con, $sql);
//     // $res = count($result);
//     if($row = mysqli_fetch_array($result)){
        
//         $bookTitle = $row['book_title'];
//         $bookAuthor= $row['book_author'];
//         $bookYear= $row['book_year'];
//         $bookSummary = $row['book_summary'];
//         $bookImage = $row['book_image'];
//         $bookPdf = $row['book_pdf'];
//         header("location: index.php");
//     }
// }
?>