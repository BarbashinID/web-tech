<?php
$link = mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
mysqli_select_db($link,"a0676013b") or die ("Нет такой таблицы");

$name=json_decode($_GET['sname']);
$email=json_decode($_GET['semail']);
$message=json_decode($_GET['smessage']);

mysqli_query($link, 'SET NAMES utf8');

$sql_add= "INSERT INTO guestbook SET name='".$name."',email='".$email."',message='".$message."'";
mysqli_query($link,$sql_add);
if(mysqli_affected_rows($link)>0)
{
    print "thx";
}
else
{
    print "Error";
}
?>