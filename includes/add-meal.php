<?php

include("config.php");
session_start();

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["addMeal"])) {
    $mealDate = $_POST["MealDate"];
    $mealDescription = $_POST["MealDescription"];
    $mealPortion = $_POST["MealPortion"];

    $sql = "INSERT INTO meals (MemberID, Date, MealDescription, MealPortion)
            VALUES ('{$_SESSION['id']}', '$mealDate', '$mealDescription', $mealPortion)";

    mysqli_query($con, $sql);

    header('Location: ../log-page.php');
}



?>