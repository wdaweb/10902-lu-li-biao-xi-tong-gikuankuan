<?php
include_once "../base.php";

$table="work";

$name=$_POST['name'];
$link=$_POST['link'];

$data=[
    "name"=>$name,
    "link"=>$link,
    "sh"=>1
];

save($table,$data);
to("../index.php");


?>