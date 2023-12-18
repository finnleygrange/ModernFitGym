<?php

include("config.php");
session_start();

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["addWorkout"])) {
    $workoutDate = $_POST["ExerciseDate"];
    $exerciseDescription = $_POST["ExerciseDescription"];
    $exerciseDuration = $_POST["ExerciseDuration"];

    $sql = "INSERT INTO workouts (MemberID, Date, ExerciseDescription, ExerciseDuration)
            VALUES ('{$_SESSION['id']}', '$workoutDate', '$exerciseDescription', $exerciseDuration)";

    mysqli_query($con, $sql);

    header('Location: ../log-page.php');
}



?>