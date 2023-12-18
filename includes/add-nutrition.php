<?php

include("config.php");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["addNutritionalInfo"])) {
    $foodName = $_POST["foodName"];
    $calorieCount = $_POST["calorieCount"];
    $protein = $_POST["protein"];
    $carbohydrates = $_POST["carbohydrates"];
    $fat = $_POST["fat"];
    $fiber = $_POST["fiber"];

    $sql = "INSERT INTO nutritionalinformation (FoodName, CalorieCount, Protein, Carbohydrates, Fat, Fiber)
            VALUES ($foodName, $calorieCount, $protein, $carbohydrates, $fat, $fiber)";

    mysqli_query($con, $sql);

    header('Location: ../nutritional-information.php');
}



?>