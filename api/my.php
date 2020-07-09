<?php
include_once "../base.php";

$table="my";

$text=$_POST['text'];



$data=[
    "text"=>$text,
    "sh"=>1, //之後做顯示
    "id"=>1
];

save($table,$data);
to("../index.php");


?>