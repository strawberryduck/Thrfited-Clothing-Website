<?php
    $conn = mysqli_connect("localhost","root","","Website");
    if(mysqli_connect_errno()){
        echo "Failed to connect MySQL.";
        return;    
    }
?>