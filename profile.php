<?php session_start(); ?>
<?php 
    include("filters/auth_filter.php");
    require('includes/config.php');
    include("includes/constants.php");
    require('includes/functions.php');
?>
<?php 
$user_id = (int)$_GET['id'];
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

    //Update information about the user on his profile page
    if(isset($_POST['update'])){
        global $con;
        $id = $_SESSION['user_ID'];
        $user_name = $_POST['userName'];
        $user_password = $_POST['userPassword'];
        //$user = find_user_by_id($_GET['id']);
        //echo "one";
         if(!empty($user_name) || !empty($user_password)){
            // echo "here";

            $q= "UPDATE `user` SET user_name='$user_name' WHERE user_ID='$id' ";
            $result = $con->query($q);
            //var_dump($id);
            $_SESSION['message']="Profile updated Successfully!";
            $_SESSION['msg_type']="success";
           
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
                <h3 class="panel-title">Welcome <?= $user->user_name ?></h3>
            </div>
            <form class="panel-body" action="user-report.php" method="post">
                <div class="user-content">
                    <a href="download.php">Downloaded Books</a>
                </div>
                <div class="user-content">
                    <a href="rated.php">Rated Books</a>
                </div>
                <br>
                <a href="user-report.php?user_ID=<?php echo $user_id; ?>" class="btn btn-success">View Your Activities</a>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Related information</h3>
            </div>
            <div class="panel-body">
            <form action="" method="POST">
                <?php 
                    if(isset($_SESSION['message'])):
                  ?>
                  <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                      <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                      ?>
                  </div>
                  <?php endif ?>
                <div class="form-group">
                    <label >User Name</label>
                    <input type="text" name="userName" value="" placeholder="<?= $user->user_name ?>" class="form-control">
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