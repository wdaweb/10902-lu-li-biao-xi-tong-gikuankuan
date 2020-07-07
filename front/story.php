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
<table style="width:70%;margin:auto;text-align:left">
<tr>
        <td style="width: 30%;">時間</td>
        <td style="width: 40%;">單位</td>
        <td style="width: 30%;">職稱</td>
    </tr>

<?php
foreach ($rows as $row) {
?>
    <tr>
        <td><?= $row['date']; ?></td>
        <td><?= $row['location']; ?></td>
        <td><?= $row['job']; ?></td>
    </tr>
    <?php } ?>
</table>


</body>
</html>