<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
include_once "./base.php";

$sql = "select * from school where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<h2>世新大學</h2>
<table style="width:90%;margin:auto;text-align:left">
<tr>
        <td style="width: 25%;">時間</td>
        <td style="width: 30%;">單位</td>
        <td style="width: 25%;">職稱</td>
        <td style="width: 20%;">顯示/刪除</td>
    </tr>

<?php
foreach ($rows as $row) {
?>
    <tr>
        <td><?= $row['date']; ?></td>
        <td><?= $row['location']; ?></td>
        <td><?= $row['job']; ?></td>
        <td><input type="checkbox" id="<?= $row['id']?>">顯示 <input type="checkbox" id="<?= $row['id']?>">刪除   </td>
    </tr>
    <?php } ?>
</table>

<hr>

<form action="api/story.php" method="POST">
    <table>
<tr>
        <td style="width: 25%;">時間</td>
        <td style="width: 30%;">單位</td>
        <td style="width: 30%;">職稱</td>
    </tr>
    <tr>
        <td ><input type="text"></td>
        <td ><input type="text"></td>
        <td ><input type="text"></td>
      
    </tr>
    <tr>
        <td rowspan="3">送出</td>
    </tr>
</table>
<form>


</form>
</body>
</html>