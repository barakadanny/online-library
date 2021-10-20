<?php
// Create connection
 $con = mysqli_connect("localhost","root","","digibook");
 if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//code to be executed...

// Close connection	
// mysqli_close($con);
   
?>