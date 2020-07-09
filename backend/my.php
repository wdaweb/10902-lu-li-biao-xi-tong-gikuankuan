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

$sql = "select * from my where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<h2>我的自傳</h2>
<form action="api/my.php" method="post">
<table style="width:70%;margin:auto;text-align:left">
<?php
foreach ($rows as $row) {
?>
    <tr>
        <td>
            <textarea name="text" id="" cols="30" rows="10">
                <?= $row['text']; ?>
            </textarea>
        </td>
    </tr>
    <?php } ?>
</table>
<input type="submit" value="更新">
</form>


</body>
</html>