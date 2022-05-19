<?php 
    session_start();
    session_unset();
    session_destroy();
    header("Location: index_after_logout.html");
?>