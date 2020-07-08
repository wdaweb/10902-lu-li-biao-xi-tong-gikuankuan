<?php
include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$sql = "select * from user where `acc` ='$acc' &&  `pw` ='$pw'";
$user = $pdo -> query($sql)->fetch(PDO::FETCH_ASSOC);

if(empty($_SESSION) || $_SESSION['login']==0){

    if($user){
        to("/admin.php");
    }else{
        to("/admin.php");
    }
}else{
$_SESSION['login']=0;

}


?>
