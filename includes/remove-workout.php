<?php

include("config.php");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["removeWorkout"])) {
    $removeWorkoutID = $_POST["removeWorkoutID"];
    
    $deleteSql = "DELETE FROM workouts WHERE workoutID = $removeWorkoutID";

    mysqli_query($con, $deleteSql);
    header('Location: ../log-page.php');
}

?>