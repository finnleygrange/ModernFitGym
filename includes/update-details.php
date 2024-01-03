<?php
session_start();
include("config.php");

if ($con) {
    $newFirstName = isset($_POST['newFirstName']) ? $_POST['newFirstName'] : '';
    $newLastName = isset($_POST['newLastName']) ? $_POST['newLastName'] : '';
    $newEmail = isset($_POST['newEmail']) ? $_POST['newEmail'] : '';
    $email = $_SESSION['email'];
    $userRole = $_SESSION['userRole'];

    $tableName = $userRole . 's';
    $updateFields = array();

    if (!empty($newFirstName)) {
        $updateFields[] = "FirstName = '$newFirstName'";
    }

    if (!empty($newLastName)) {
        $updateFields[] = "LastName = '$newLastName'";
    }

    if (!empty($newEmail)) {
        $updateFields[] = "Email = '$newEmail'";
    }

    $updateFieldsString = implode(', ', $updateFields);

    if (!empty($updateFields)) {
        $query = "UPDATE $tableName SET $updateFieldsString WHERE Email = '$email'";
        $results = mysqli_query($con, $query);

        if ($results) {
            if (!empty($newFirstName)) {
                $_SESSION['firstName'] = $newFirstName;
            }
            if (!empty($newLastName)) {
                $_SESSION['lastName'] = $newLastName;
            }
            if (!empty($newEmail)) {
                $_SESSION['email'] = $newEmail;
            }
        }
    }

    header('Location: ../change-details.php');
    die();
}
?>