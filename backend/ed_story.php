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
<form action="api/story.php" method="POST">
    <tr>
        <td><?= $row['date']; ?></td>
        <td><?= $row['location']; ?></td>
        <td><?= $row['job']; ?></td>
        <td>
        <input type="checkbox" name="sh[]" value="<?= $row['id']?>">顯示 
        <input type="checkbox" name="del[]" value="<?= $row['id']?>">刪除   
    </td>
    </tr>
    <?php } ?>
</table>

<hr>


    <table>
<tr>
        <td style="width: 25%;">時間</td>
        <td style="width: 30%;">單位</td>
        <td style="width: 30%;">職稱</td>
    </tr>
    <tr>
        <td ><input type="text" name="date"></td>
        <td ><input type="text" name="location"></td>
        <td ><input type="text" name="job"></td>
      
    </tr>
    <tr>
        <td colspan="3"><input type="submit" value="送出"></td>
    </tr>
</table>
<form>


</form>
</body>
</html>