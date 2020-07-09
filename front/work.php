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
    width: 150px;
    height: 200px;
    background: #0F4A7D ;
    border-radius: 10px;
    display: flex;
    position: relative;
    margin: 10px auto;
    padding: 20px;
    box-shadow: black 5px 5px 5px;
    text-align: center;

}
img{

border: white solid 2px;
}
.card2{
    width: 100px;
    height: 100px;
    position: absolute;
    top:10px;
    left:25px
}
p{
    color:white;
    font-size:15px;
    position: absolute;
    top: 120px;
    left: 40px; 
}
.btn{
    position: absolute;
    top: 150px;
    left: 10px;
    height: 30px;
    width: 120px;
    background: yellow;
    line-height: 10px;

}
.contant{
    display: flex;
    flex-wrap:wrap

}

</style>
<body>
    
<?php
$sql = "select * from work ";
$rows = $pdo->query($sql)->fetchAll();
?>
<div class="contant">
<?php 
foreach($rows as $row){
?>
    <div class="card">
        <img class="card2" src="https://picsum.photos/50/50/?random=<?=$row['id']?>">
        <p > <?=$row['name']?> </p>
        <div class="btn"><a href="<?=$row['link']?>">作品連結</a></div>
    </div>

<?php }?>

</div>
</body>
</html>