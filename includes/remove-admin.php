<?php

include("config.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["removeAdmin"])) {
    $removeAdminID = $_POST["removeAdminID"];

    $deleteSql = "DELETE FROM admins WHERE AdminID = $removeAdminID";

    mysqli_query($con, $deleteSql);

    header('Location: ../admin-edit.php');
}

mysqli_close($con);

?>