<?php
require "bddatalaba3.php";

$n=$_GET['fn'];
$tek=$_GET['ftek'];

$header2= array();
$wall2=array();
$img2=array();
$data=array();

$range=0;
$range=$tek+$n;

$header2=array_slice($header,$tek,$range);
$wall2=array_slice($wall,$tek,$range);
$img2=array_slice($img,$tek,$range);

$data['header']=$header2;
$data['wall']=$wall2;
$data['img']=$img2;

echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>