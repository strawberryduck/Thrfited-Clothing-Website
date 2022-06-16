<?php
include("../../../php/session_start.php");
include("../../../php/database_connect.php");
$p_id = $_GET['p_id'];
$query = "DELETE from items where p_id = '$p_id'";

// $query="DELETE * FROM items AS items
// JOIN cart AS cart
//   ON cart.p_id = items.p_id
//   JOIN orders AS orders
//   ON orders.p_id = items.p_id
//   Where items.p_id = '$p_id' AND cart.p_id = '$p_id' AND orders.p_id = '$p_id'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?> 

<html>
    <h1>Success!</h1>
    <br>
    <a href="../manage products/manage.php">Click Here to go back</a>
</html>