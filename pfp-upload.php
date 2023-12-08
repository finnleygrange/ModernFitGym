<?php 

$file = $_FILES["file"]["name"]; //Name of file
$fileSpacesRemoved = str_replace(" ","_", $file);
$fileDir = "images/" . basename($_FILES["file"]["name"]); //File path
$fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //File type
$allowedFileSize = 500000; //Max file size

$fileAllowed = 1;
$errorMsg;

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
    session_start();
    $_SESSION["errorMsg"] = $errorMsg;
    $_SESSION["profilePicture"] = $fileDir;
} else {
    $fileDir = "images/" . basename($_FILES["file"]["name"]);
    move_uploaded_file(($_FILES["file"]["tmp_name"]), $fileDir);
}

header("Location: ".$_SERVER['HTTP_REFERER']);//Redirects back to profile page.

?>