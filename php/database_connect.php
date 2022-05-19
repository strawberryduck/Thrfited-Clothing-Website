<?php
    $conn = mysqli_connect("localhost","root","","website");
    if(mysqli_connect_errno()){
        echo "Failed to connect MySQL.";
        return;    
    }
?>