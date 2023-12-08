<?php 

$file = $_FILES["file"]["name"];
$allowedFileSize = 500000;

$fileAllowed = 1;

$fileSizeCheck = getimagesize($_FILES["file"]["tmp_name"]);
if ($fileSizeCheck !== false){
    //Image is real
} else {
    //Image is fake
    $fileAllowed = 0;
}

if ($_FILES["file"]["size"] > $allowedFileSize){
    //File is too big
    $fileAllowed = 0;
}

if (file_exists($file)){
    echo "file exists";
} else {
    echo "doesnt exist";
}

//header("Location: ".$_SERVER['HTTP_REFERER']);//Redirects back to profile page.

?>