<?php 
session_start();

include ("config.php");

$file = $_FILES["file"]["name"]; //Name of file
$fileSpacesRemoved = str_replace(" ","_", $file);
$fileDir = "images/" . basename($_FILES["file"]["name"]); //File path
$fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //File type
$allowedFileSize = 500000; //Max file size

$fileAllowed = 1;
$errorMsg;

if ($_FILES["file"]["tmp_name"] == null){
    header("Location: ".$_SERVER['HTTP_REFERER']);//Redirects back to profile page.
}

$fileSizeCheck = getimagesize($_FILES["file"]["tmp_name"]);
if ($fileSizeCheck == false){
    //Image is fake
    $fileAllowed = 0;
    $errorMsg = "Upload failed";
}

if ($_FILES["file"]["size"] > $allowedFileSize){
    //File is too big
    $fileAllowed = 0;
    $errorMsg = "Image size too large";
}

if (file_exists($fileDir)){
    echo "file exists";
    $fileAllowed = 0;
    $errorMsg = "File already exists";
}

if ($fileType != "png" && $fileType != "jpg" && $fileType != "jpeg"){
    //File is not an allowed filetype
    $fileAllowed = 0;
    $errorMsg = "File type not allowed";
}

if ($fileAllowed == 0){
    $_SESSION["errorMsg"] = $errorMsg;
    $_SESSION["profilePicture"] = $fileDir;
} else {
    $fileDir = "pfps/" . basename($_FILES["file"]["name"]);
    move_uploaded_file(($_FILES["file"]["tmp_name"]), $fileDir);
    $_SESSION["pfp"] = basename($_FILES["file"]["name"]);
    $userAlreadyHasPfp = false;
    $id = $_SESSION["id"];
    $pfpPath = $_SESSION["pfp"];
    $userId = $_SESSION["id"];
    $query = "SELECT * FROM pfps";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                if ($row["id"] == $userId) {
                    $userAlreadyHasPfp = true;
                }
        }
    }

    if ($userAlreadyHasPfp) {
        $query = "UPDATE pfps
        SET pfp = '$pfpPath'
        WHERE id = $id";
        $result = mysqli_query($con, $query);
    } else {
        $query = "INSERT INTO pfps (id,pfp) VALUES ('$id', '$pfpPath')";
        $result = mysqli_query($con, $query);
    }


}

header("Location: ".$_SERVER['HTTP_REFERER']);//Redirects back to profile page.

?>