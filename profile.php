<?php $title="Profile"; ?>
   <?php session_start(); ?>
<?php 
    include("includes/constants.php");
?>
<?php 
    include("includes/header.php");
?>

    
<?php
    include("includes/navigation.php");
?> 
<div class="container pt-5 pb-5" style="margin-top:6rem;">
<?php include('partials/_flash.php'); ?>
    <form>
        <div class="form-group" >
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control"  placeholder="User name">
        </div>
        <div class="form-group" >
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"   placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
    include("includes/footer.php");
?>