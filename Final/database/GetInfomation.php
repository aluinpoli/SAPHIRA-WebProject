<?php

include_once 'Connection.php';
/*
 * get currect SQL Query
 */
$sql="select * from jokes";
if($_GET){
    $sql='select * from jokes as j JOIN jokes_sphere as js ON j.joke_id=js.joke_id';
    switch ($_GET['show']){
    case "all":
        $sql="select * from jokes";
        break;
    case "html":
        $sql.=" where joke_sphere=1";
        break; 
    case "css":
        $sql.=" where joke_sphere=2";
        break; 
    case "java":
        $sql.=" where joke_sphere=3";
        break; 
    case "csharp":
        $sql.=" where joke_sphere=4";
        break; 
    }
}
/*
 * create new instance and 
 * database connect
 */
$db = new DatabaseConnect;
$query = $db->execute($sql);
/*
 * if query is execute sort information in $joke massive
 */
if (isset($query)) {

    $i=1;

    while ($row = mysqli_fetch_assoc($query)) {
        $id[$i]=$row['joke_id'];
        $joke[$id[$i]]['title'] = $row['joke_title'];
        $joke[$id[$i]]['content'] = $row['joke_content'];
        $joke[$id[$i]]['date'] = $row['joke_date'];
        $joke[$id[$i]]['type'] = $row['joke_type'];
        $i++;
    }
}



