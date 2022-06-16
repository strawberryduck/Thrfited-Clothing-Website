<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
include("../../../php/database_connect.php");
$p_id=$_GET["p_id"];
$u_id=$_SESSION['u_id'];
$query="INSERT into `cart` (u_id, p_id) VALUES ('$u_id', '$p_id')";
$result = mysqli_query($conn, $query);
?>

<html> 
<?php 
        echo "Success";
        echo "<a href='../items/products.php'>Go Back</a>";
?>
</html>