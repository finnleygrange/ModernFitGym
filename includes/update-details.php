<?php
session_start();
include("config.php");

if (isset($_POST['newFirstName'])) {
    $newFirstName = $_POST['newFirstName'];
    $newLastName = $_POST['newLastName'];
    $email = $_SESSION['newEmail'];
    $userRole = $_SESSION['userRole'];

    $tableName = $userRole . 's';
    $query = "UPDATE $tableName SET FirstName = '$newFirstName', LastName = '$newLastName' WHERE Email = '$email'";
    $results = mysqli_query($con, $query);

    if ($results) {
        $_SESSION['firstName'] = $newFirstName;
        $_SESSION['lastName'] = $newLastName;
    }

    header('Location: ../change-details.php');
    die();
}
?>