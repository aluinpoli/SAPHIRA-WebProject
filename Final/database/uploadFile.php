<?php

include_once 'Connection.php';
if ($_POST) {
    if ($_POST['textJoke'] == 'img') {
        if (isset($_FILES['file'])) {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
                if ($_FILES["file"]["size"] < 8000000) {
                    if ($_FILES["file"]["error"] > 0) {
                        $error = "We have problem to upload this file !";
                    } else {
                        if (file_exists("../imgs/" . $_FILES["file"]["name"])) {
                            $error = $_FILES["file"]["name"] . " already exists. ";
                        } else {
                            if ($_POST) {
                                $err = '';
                                $title = trim($_POST['title']);
                                if (mb_strlen($title) < 5) {
                                    $err.=' Title is too short. ';
                                }
                                if (mb_strlen($err) > 1) {
                                    $error = $err;
                                } else {
                                    $db = new DatabaseConnect;
                                    $filepath = "imgs/" . $_FILES["file"]["name"];
                                    $sql = "INSERT INTO `jokehunter`.`jokes` (`joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES ('" . $db->escape($title) . "', '" . $filepath . "', '" . date('y-m-d') . "', 1)";
                                    $query = $db->execute($sql);
                                    move_uploaded_file($_FILES["file"]["tmp_name"], "../imgs/" . $_FILES["file"]["name"]);
                                    $id = $db->inserted_id();
                                    $sphere = $_POST['sphere'];
                                    foreach ($sphere as $jokeId) {
                                        $sql = 'INSERT INTO jokes_sphere (joke_id,joke_sphere) VALUES (' . $id . ',' . $jokeId . ')';
                                        $query = $db->execute($sql);
                                    }
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
    } else {
        /*
         * send text message
         */
        if ($_POST) {
            $err = '';
            $title = trim($_POST['title']);
            if (mb_strlen($title) < 5) {
                $err.=' Title is too short. ';
            }
            if (mb_strlen($_POST['content']) < 8) {
                $err.=" Joke content is too short ";
            }
            if (mb_strlen($err) > 1) {
                $error = $err;
            } else {
                $db = new DatabaseConnect;
                $content = trim($_POST['content']);
                $sql = "INSERT INTO `jokehunter`.`jokes` (`joke_title`, `joke_content`, `joke_date`, `joke_type`) VALUES ('" . $db->escape($title) . "', '" . $db->escape($content) . "', '" . date('y-m-d') . "', 2)";
                $query = $db->execute($sql);
                $id = $db->inserted_id();
                $sphere = $_POST['sphere'];
                foreach ($sphere as $jokeId) {
                    $sql = 'INSERT INTO jokes_sphere (joke_id,joke_sphere) VALUES (' . $id . ',' . $jokeId . ')';
                    $query = $db->execute($sql);
                }
                $message = "The POST is uploaded";
                echo $message;
            }
        }
    }
}
if (isset($message)) {
    echo $message;
    header('Location: ../index.php');   
} else if (isset($error)) {
    echo $error;
    header('Location: ../index.php');
}