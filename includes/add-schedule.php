<?php

include("config.php");
session_start();

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["addSchedule"])) {
    $monday = $_POST["monday"];
    $tuesday = $_POST["tuesday"];
    $wednesday = $_POST["wednesday"];
    $thursday = $_POST["thursday"];
    $friday = $_POST["friday"];
    $saturday = $_POST["saturday"];
    $sunday = $_POST["sunday"];

    $memberID = $_SESSION["id"];

    $query = "SELECT * FROM Schedule WHERE MemberID = '$memberID'";
    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO Schedule (MemberID, monday, tuesday, wednesday, thursday, friday, saturday, sunday)
        VALUES ('{$_SESSION['id']}', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday', '$sunday')";
        mysqli_query($con, $sql);
    } else {
        $dropQuery = "DELETE FROM Schedule WHERE MemberID = $memberID";
        $command = mysqli_query($con,$dropQuery);
        $sql = "INSERT INTO Schedule (MemberID, monday, tuesday, wednesday, thursday, friday, saturday, sunday)
        VALUES ('{$_SESSION['id']}', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday', '$sunday')";
        mysqli_query($con, $sql);
    }



    header('Location: ../schedule.php');
}



?>