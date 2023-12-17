<?php

include("config.php");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["removeNutritionalInfo"])) {
    $removeFoodID = $_POST["removeFoodID"];
    
    $deleteSql = "DELETE FROM nutritionalinformation WHERE FoodID = $removeFoodID";

    mysqli_query($con, $deleteSql);
    header('Location: ../nutritional-information.php');
}

?>