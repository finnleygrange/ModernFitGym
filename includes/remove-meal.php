<?php

include("config.php");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["removeMeal"])) {
    $removeMealID = $_POST["removeMealID"];
    
    $deleteSql = "DELETE FROM meals WHERE mealID = $removeMealID";

    mysqli_query($con, $deleteSql);
    header('Location: ../log-page.php');
}

?>