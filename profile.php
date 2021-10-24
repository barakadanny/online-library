<?php session_start(); ?>
<?php 
    include("filters/auth_filter.php");
    require('includes/config.php');
    include("includes/constants.php");
    require('includes/functions.php');
?>
<?php $title="Profile"; 

    if(!empty($_GET['id'])){
        //fetch data about the user using his identification 
        // by using a function (find_user_by_ID)
        $user = find_user_by_id($_GET['id']);
        if(!$user){
            header('Location:index.php');
        }

    }else{
        //redirect the user
        header('Location:profile.php?id='.$_SESSION['user_ID']);
    }
?>
<?php 
    include("includes/header.php");
?>   
<?php
    include("includes/navigation.php");
?> 
<div class="container pt-5 pb-5" style="margin-top:6rem;">
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Welcome <?= $_SESSION['user_name'] ?></h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Related information</h3>
            </div>
            <div class="panel-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    include("includes/footer.php");
?>