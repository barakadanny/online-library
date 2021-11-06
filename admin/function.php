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
    header("location: table.php");
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
    $genre = $_POST['genre_name'];

   	if(!empty($_FILES["image"]["tmp_name"])){
		$fileinfo=PATHINFO($_FILES["image"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;

		// insertion to the data base
		if(!empty($genre)){
			
			$sql = "INSERT INTO `genre`(`genre_name`, `genre_image`) 
						VALUES ('$genre','$location')";
			$result = mysqli_query($con, $sql);
			if($result==1){
                header("Location:genre.php");
				$_SESSION['message']="Genre Added successfully";
				$_SESSION['msg_type']="success";
			}else{
                header("Location:genre.php");
				$_SESSION['message']="⚠ failed to insert Genre";
				$_SESSION['msg_type']="danger";
			}
	
			// $id = (int)$_GET['id'];
			// echo $id;
		}else{
            header("Location:genre.php");
			$_SESSION['message']="⚠ All field are required!";
			$_SESSION['msg_type']="danger";
		}
	}else{
        header("Location:genre.php");
		$_SESSION['message']="No image has been selected";
		$_SESSION['msg_type']="danger";
	} 


    

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

// edit genre
if(isset($_GET['edit_genre'])){

}

// delete genre
if(isset($_GET['delete_genre'])){
    $id=$_GET['delete_genre'];
    echo $id;
    $sql= "DELETE FROM genre WHERE genre_ID='$id' ";
    $query= mysqli_query($con, $sql);
    if($query==1){
            $_SESSION['message']="Genre has been deleted successfully !";
            $_SESSION['msg_type']="success";
            header("location: genre.php");
        }else{
            $_SESSION['message']="Genre Failed to delete !";
            $_SESSION['msg_type']="danger";
            header("location: genre.php");
        }

    // header("Location: genre.php");

}

// function to add language
if(isset($_POST['language_add'])){
    $language = $_POST['language_name'];

   	if(!empty($_FILES["image"]["tmp_name"])){
		$fileinfo=PATHINFO($_FILES["image"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"language_img/" . $newFilename);
		$location="language_img/" . $newFilename;

		// insertion to the data base
		if(!empty($language)){
			
			$sql = "INSERT INTO `language` (`language_name`, `language_image`) 
						VALUES ('$language','$location')";
			$result = mysqli_query($con, $sql);
        //    var_dump($result);
        //    echo("Error description: " . $con -> error);
			if($result==1){
                header("Location:language.php");
				$_SESSION['message']="Language Added successfully";
				$_SESSION['msg_type']="success";
			}else{
                header("Location:language.php");
				$_SESSION['message']="⚠ failed to insert Language";
				$_SESSION['msg_type']="danger";
			}
	
			// $id = (int)$_GET['id'];
			// echo $id;
		}else{
            header("Location:language.php");
			$_SESSION['message']="⚠ All field are required!";
			$_SESSION['msg_type']="danger";
		}
	}else{
        header("Location:language.php");
		$_SESSION['message']="No image has been selected";
		$_SESSION['msg_type']="danger";
	} 


    

    // if(empty($_POST['language_name'])){
    //     header("location: language.php");
    //     $_SESSION['message']="⚠ All field are required!";
    //     $_SESSION['msg_type']="danger";
    // }else{
    //     $languagename = $_POST['language_name'];

    //     $sql = "INSERT INTO language values ('', '$languagename')";
    //     $query = mysqli_query($con, $sql);
    //     if($query==1){
    //         $_SESSION['message']="Record has been saved successfully !";
    //         $_SESSION['msg_type']="success";
    //         header("location: genre.php");
    //     }else{
    //         echo "Failed to insert Data";
    //     }
    // }
}

 ?>

 