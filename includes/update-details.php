<?php
session_start();
include("config.php");

if (isset($_POST['newName'])) {
    $newName = $_POST['newName'];
    $email = $_SESSION['email'];

    $query = "UPDATE Members SET FirstName = '$newName' WHERE Email = '$email'";
    $results = mysqli_query($con, $query);

    if ($results) {
        $_SESSION['FirstName'] = $newName;
    }
}
?>