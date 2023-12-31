<?php

include("config.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["removeTrainer"])) {
    $removeTrainerID = $_POST["removeTrainerID"];

    $deleteSql = "DELETE FROM trainers WHERE TrainerID = $removeTrainerID";

    mysqli_query($con, $deleteSql);

    header('Location: ../admin-edit.php');
}

mysqli_close($con);

?>