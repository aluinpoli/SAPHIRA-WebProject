<?php
include_once 'Connection.php';
if ($_FILES['file']['name']>1){
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
                    if($_POST){
                        $err='';
                        $title=trim($_POST['title']);
                        if(mb_strlen($title)<5){
                            $err.=' Title is too short. ';
                        }
                        if(mb_strlen($err)>1){
                            $error=$err;                 
                        }  else {
                            $db = new DatabaseConnect;
                            $filepath="imgs/".$_FILES["file"]["name"];
                            $sql="INSERT INTO `jokehunter`.`jokes` (`joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES ('".$title."', '".$filepath."', '". date('y-m-d')."', 1)";
                            $query = $db->execute($sql);
                            //$connect=  mysqli_connect('localhost','root', '', 'jokehunter');
                            //$stmt=  mysqli_prepare($connect, "INSERT INTO `jokehunter`.`jokes` (`joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES (?, ?, ". date(dd-mm-yyyy).", \'1\')");
                            //$filepath="imgs/".$_FILES["file"]["name"];
                            //mysqli_stmt_bind_param($stmt, 'ss',$title,$filepath);
                            //mysqli_execute($stmt);
                            move_uploaded_file($_FILES["file"]["tmp_name"], "../imgs/" . $_FILES["file"]["name"]);
                            $message = "The file is uploaded";
                            echo $message;
                        }
                    }                   
                }
            }
        } else {
            $error = 'Too much size';
        }
    } else {
        $error = "Invalid type of file";
    }
}
}  else {
    /*
     * send text message
     */
    if($_POST){
        $err='';
        $title=trim($_POST['title']);
        if(mb_strlen($title)<5){
            $err.=' Title is too short. ';
        }
        if(mb_strlen($_POST['content'])<8){
            $err.=" Joke content is too short ";
        }
        if(mb_strlen($err)>1){
            $error=$err;                 
        }  else {
            $db = new DatabaseConnect;
            $content=  trim($_POST['content']);
            $sql="INSERT INTO `jokehunter`.`jokes` (`joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES ('".$title."', '".$content."', '". date('y-m-d')."', 2)";
            $query = $db->execute($sql);
            //$connect=  mysqli_connect('localhost','root', '', 'jokehunter');
            //$stmt=  mysqli_prepare($connect, "INSERT INTO `jokehunter`.`jokes` (`joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES (?, ?, ". date(dd-mm-yyyy).", \'1\')");
            //$filepath="imgs/".$_FILES["file"]["name"];
            //mysqli_stmt_bind_param($stmt, 'ss',$title,$filepath);
            //mysqli_execute($stmt);
            $message="The POST is uploaded";
            echo $message;
        }
    } 
}

if(isset($message)){    
    echo $message;
    header('Location: ../index.php');   
}else if(isset($error)){   
    echo $error;
    header('Location: ../index.php');
}
/*
 * 
                        if(isset($_POST['content'])){
                            if($_POST['content']<8){
                                $err.=' Content is too short. ';
                            }
                        }
 */