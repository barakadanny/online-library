<?php session_start(); ?>
<?php 
    include("filters/auth_filter.php");
    require('includes/config.php');
    include("includes/constants.php");
    require('includes/functions.php');
?>
<?php 
    $title="Profile"; 

    if(!empty($_GET['id'])){
        //fetch data about the user using his identification 
        // by using a function (find_user_by_ID)
        $user = find_user_by_id($_GET['id']);
        if(!$user){
            header('Location:index.php');
        }

    }else{
        header('Location:profile.php?id='.$_SESSION['user_ID']);
    }



    //Update information
    if(isset($_POST['update'])){
        
        $user_name = $_POST['userName'];
        $user_password = $_POST['userPassword'];
         if(!empty($user_name) && !empty($user_password)){
        //if(!empty($user_name)){
            $q= "UPDATE user SET user_name='$user_name' ";
            //$result = mysqli_query($con, $q);
           
        }else{
            $_SESSION['message']="⚠ All field are required!";
            $_SESSION['msg_type']="danger";
        }
 
    }else{
        clear_input_data();
    }
?>
<?php 
    include("includes/header.php");
?>   
<?php
    include("includes/navigation.php");
?> 
<div class="container pt-5 pb-5" style="margin-top:6rem; margin-bottom: 3.1rem;">
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Welcome <?= $user->user_email ?></h3>
            </div>
            <div class="panel-body">
                <div class="user-content">
                    <a href="download.php">Downloaded Books</a>
                </div>
                <div class="user-content">
                    <a href="rated.php">Rated Books</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Related information</h3>
            </div>
            <div class="panel-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label >User Name</label>
                    <input type="email" name="userName" value="<?= $user->user_name ?>" class="form-control">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="userEmail" value=" //$user->user_email " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" value="" name="userPassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    include("includes/footer.php");
?>