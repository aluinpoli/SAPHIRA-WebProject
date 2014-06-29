<?php

if(isset($_FILES['file'])) {
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    if ((($_FILES["file"]["type"] == "image/gif") 
            || ($_FILES["file"]["type"] == "image/jpeg") 
            || ($_FILES["file"]["type"] == "image/jpg") 
            || ($_FILES["file"]["type"] == "image/pjpeg") 
            || ($_FILES["file"]["type"] == "image/x-png") 
            || ($_FILES["file"]["type"] == "image/png")) 
            && in_array($extension, $allowedExts)) {
        if ($_FILES["file"]["size"] < 8000000) {
            if ($_FILES["file"]["error"] > 0) {
                $error = "We have problem to upload this file !";
            } else {/*
              echo "Upload: " . $_FILES["file"]["name"] . "<br>";
              echo "Type: " . $_FILES["file"]["type"] . "<br>";
              echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
              echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>"; */
                if (file_exists("../imgs/" . $_FILES["file"]["name"])) {
                    $error = $_FILES["file"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "../imgs/" . $_FILES["file"]["name"]);
                    $message = "The file is uploaded";
                }
            }
        } else {
            $error = 'Too much size';
        }
    } else {
        $erroor = "Invalid type of file";
    }
}
if(isset($message)){
    
header('Location: ../index.php');
}
