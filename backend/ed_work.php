<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
    include_once "./base.php";
    ?>
</head>
<style>
.card{
    width: 300px;
    height: 400px;
    background: #0F4A7D ;
    border-radius: 10px;
    display: flex;
    position: relative;
    margin: 10px auto;
    padding: 20px;
}
.card2{
    width: 200px;
    height: 200px;
    position: absolute;
    top:10px;
    left:50px
}
p{
    color:white;
    font-size:15px;
    position: absolute;
    top: 240px;
    left: 20px; 
}
.btn{
    color:white;
    font-size:15px;
    position: absolute;
    top: 270px;
    left: 5px; 

}
.contant{
    display: flex;

}

</style>
<body>
    
<?php
$sql = "select * from work ";
$rows = $pdo->query($sql)->fetchAll();
?>
<div class="contant">
    <form style="margin: auto;" action="api/work.php" method="post">
    <div class="card">
        <img class="card2" src="https://picsum.photos/100/100/?random=1">
        <p >更新名稱<input type="text" name="name"></p>
        <div class="btn">更新連結<input type="text" name="link"></div>
        <input style="position: absolute; top: 320px;" type="submit" value="送出">
    </div>
    </form>
</div>
</body>
</html>