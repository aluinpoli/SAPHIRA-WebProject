<?php

include_once 'Connection.php';

$sql="select * from jokes";
if($_GET){
    switch ($_GET['show']){
    case "all":
        break;
    case "html":
        $sql="select * from jokes where joke_sphere=1";
        break; 
    case "css":
        $sql="select * from jokes where joke_sphere=2";
        break; 
    case "java":
        $sql="select * from jokes where joke_sphere=3";
        break; 
    case "csharp":
        $sql="select * from jokes where joke_sphere=4";
        break; 
    }
}

$db = new DatabaseConnect;
$query = $db->execute($sql);
if (isset($query)) {
    $i=1;
    while ($row = mysqli_fetch_assoc($query)) {
        $id[$i]=$row['joke_id'];
        $joke[$id[$i]]['title'] = $row['joke_title'];
        $joke[$id[$i]]['content'] = $row['joke_content'];
        $joke[$id[$i]]['date'] = $row['joke_date'];
        $joke[$id[$i]]['type'] = $row['joke_type'];
        $joke[$id[$i]]['sphere'] = $row['joke_sphere'];
        $i++;
    }
}



