<?php
include_once "../base.php";

$table="school";

$date=$_POST['date'];
$location=$_POST['location'];
$job=$_POST['job'];
$id=$_POST['id'];


$data=[
    "date"=>$date,
    "location"=>$location,
    "job"=>$job,
    "sh"=> 1
];

$del=[
    "id"=>$id
];


save($table,$data);
del($table,$del);
to("../index.php");

?>