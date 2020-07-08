<?php
include_once "../base.php";

$table="person";

$about=$_POST['about'];
$stage=$_POST['stage'];
$photonum=$_POST['photonum'];
$mail=$_POST['mail'];
$adress=$_POST['adress'];
$car=$_POST['car'];
$contant=$_POST['contant'];


$data=[
    "about"=>$about,
    "stage"=>$stage,
    "photonum"=>$photonum,
    "mail"=>$mail,
    "adress"=>$adress,
    "car"=>$car,
    "contant"=>$contant,
    "id"=>1 //之後做顯示
];

save($table,$data);
to("../index.php");


?>