<?php
include_once 'Connection.php';
$sql="select * from jokes ";
$db=new DatabaseConnect;
$query=$db->execute($sql);
while ($row = mysqli_fetch_assoc($query)) {
    echo "<table><tr><th>".$row['joke_id']."</th><th>".$row['joke_title']."</th><th>".$row['joke_content']."</th><th>".$row['joke_date']."</th></tr></table>";
}