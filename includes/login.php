<?php
include("config.php");
session_start();

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $pinNumber = $_POST["pinNumber"];

    $roles = ['Members', 'Admins', 'Trainers'];
    $foundUser = false;

    foreach ($roles as $role) {
        $query = "SELECT * FROM $role WHERE Email = '$email' AND PinNumber = '$pinNumber'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $roleConverted;
            if ($role == 'Members'){
                $roleConverted = 'Member';
            } else if ($role == 'Admins') {
                $roleConverted = 'Admin';
            } else if ($role == 'Trainers'){
                $roleConverted = 'Trainer';
            }
            
            $_SESSION["id"] = $row[$roleConverted . "ID"];
            $_SESSION["firstName"] = $row["FirstName"];
            $_SESSION["lastName"] = $row["LastName"];
            $_SESSION["email"] = $row["Email"];
            $_SESSION["pinNumber"] = $row["PinNumber"];
            $_SESSION["userRole"] = $row["UserRole"];

            $foundUser = true;
            break;  // Stop searching once a user is found
        }
    }

    if ($foundUser) {
        header('Location: ../dashboard.php');
        die();
    } else {
        echo "Invalid email or credentials";
    }
}
?>