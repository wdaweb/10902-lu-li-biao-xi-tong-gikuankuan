<?php
include_once "../base.php";

$table="skill";

$name=$_POST['name'];
$value=$_POST['value']; //value好像沒有傳過來
$other=$_POST['other'];

$data=[
    "name"=>$name,
    "value"=>$value,
    "other"=>$other,
    "sh"=>1
];

save($table,$data);
to("../index.php");


?>