<?php

$user = 'root';
$pass = '';
$db  = 'test';


$date = date("Y-m-d");
$link = mysqli_connect('localhost', $user, $pass, $db);

$link->query("INSERT INTO comments (Name, Email, Date, Comment, Level) VALUES ('Ernie','Ernie@gmail.com','$date','Having a good time','0') ");


header("Location: index.php");


?>
