<?php
session_start();
// include the configuration file
require_once "config.php";

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
            header("location: index.php");
        }else{
            echo "error bro";
        }
    }
    
}

// aad book function
if(isset($_POST['add_book'])){
    $booktitle = $_POST['book_title'];
    $bookimage = $_POST['book_image'];
    $bookyear = $_POST['book_year'];
    $bookauthor = $_POST['book_author'];
    $booksummary = $_POST['book_summary'];
    $bookgender = $_POST['book_gender'];

    // insertion to the data baseKk
    $sql = "INSERT INTO book (`book_title`,`book_author`,`book_year`,`book_summary`,`genre_ID`,`librarian_ID`,`book_added`) 
                                VALUES ('{$booktitle}','{$bookauthor}','{$bookyear}','{$booksummary}','','','')";
    $query= mysqli_query($con, $sql);
    if($query==1){
        header("location: index.php");
    }else{
        echo "error";
    }

}

?>
