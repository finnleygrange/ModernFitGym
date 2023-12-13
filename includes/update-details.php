<?php
session_start();
include("config.php");

if (isset($_POST['newName'])) {
    $newName = $_POST['newName'];
    $email = $_SESSION['email'];
    $userRole = $_SESSION['userRole'];

    $tableName = $userRole . 's');
    $query = "UPDATE $tableName SET FirstName = '$newName' WHERE Email = '$email'";
    $results = mysqli_query($con, $query);

    if ($results) {
        $_SESSION['firstName'] = $newName;
    }

    header('Location: ../change-details.php');
    die();
}
?>