<?php

    include ("config.php");
    session_start();


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>