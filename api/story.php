<?php
include_once "../base.php";
$table="school";

echo $date=$_POST['date'];
echo $location=$_POST['location'];
echo $job=$_POST['job'];
echo $id=$_POST['sh'];
echo $del=$_POST['del'];

echo "<pre>";
 print_r($_POST);
echo "</pre>";


$data=[
    "date"=>$date,
    "location"=>$location,
    "job"=>$job,
    "sh"=> $id
];

$del=[
    "id"=>$del
];


save($table,$data);
del($table,$del);
// to("../backend/ed_story.php");

?>