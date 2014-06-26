<?php
include_once 'Connection.php';
$sql="select * from jokes ";
$db=new DatabaseConnect;
$query=$db->execute($sql);
while ($row = mysqli_fetch_assoc($query)) {
    $joke[$row['joke_id']]['title']=$row['joke_title'];
    $joke[$row['joke_id']]['content']=$row['joke_content'];
    $joke[$row['joke_id']]['date']=$row['joke_date'];
    $joke[$row['joke_id']]['type']=$row['joke_type'];
    $joke[$row['joke_id']]['sphere']=$row['joke_sphere'];
}