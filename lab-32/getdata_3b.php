<?php 
$link =mysqli_connect('localhost', 'root') or die ("Невозможно подключиться к серверу");
mysqli_select_db($link,'a0676013b') or die ("Нет такой таблицы");
$names = array();
$emails = array();
$messages = array();
$data = array();
$i=0;

mysqli_query($link,'SET NAMES utf8');

$result=mysqli_query($link,"SELECT * FROM guestbook");
while ($row=mysqli_fetch_array($result)){
    $names[$i]=$row['name'];
    $emails[$i]=$row['email'];
    $messages[$i]=$row['message'];
    $i++;
}

$data['names']=$names;
$data['emails']=$emails;
$data['messages']=$messages;
echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>
