<?php session_start(); ?>
<?php require('config.php'); ?>
<?php


if(isset($_GET["clicked"])){
    $star = (int)$_GET["clicked"];
    $book = (int)$_GET["book_id"];
    $user= (int)$_GET["user_ID"];

    $sql = "SELECT *FROM raiting WHERE book_ID='$book' ";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if($count == 1){
        $sql = "UPDATE `raiting` SET rating_star='$star' WHERE (book_ID='$book' AND user_ID='$user') ";
        $query = mysqli_query($con, $sql);
        // send a message to the user about the action that has been done
        $_SESSION['message']="Thank you for your feedback!";
        $_SESSION['msg_type']="success";

        header("Location: ../single-book.php?book_ID=".$book);

    }else{

        $sql = "INSERT INTO `raiting`(`rating_star`,`user_ID`, `book_ID`) 
                        VALUES('$star', '$user', '$book')";
        $query =mysqli_query($con, $sql);
        // send a message to the user about the action that has been done
        $_SESSION['message']="Thank you for your feedback!";
        $_SESSION['msg_type']="success";
        
        header("Location: ../single-book.php?book_ID=".$book);
        
    }

}else{
    echo " an error occured";
}


?>