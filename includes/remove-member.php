<?php

include("config.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["removeMember"])) {
    $removeMemberID = $_POST["removeMemberID"];

    $deleteSql = "DELETE FROM members WHERE MemberID = $removeMemberID";

    mysqli_query($con, $deleteSql);

    header('Location: ../admin-edit.php');
}

mysqli_close($con);

?>