<?php
include_once "../base.php";

$table="introduction";

$title=$_POST['title'];

$data=[
    "title"=>$title,
    "id"=>1
];

save($table,$data);
to("../index.php");


?>