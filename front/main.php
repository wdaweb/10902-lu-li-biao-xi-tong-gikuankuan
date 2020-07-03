<?php
include_once "./base.php";

$sql = "select * from introduction  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

<div><h3>
<?= $row['title']; ?>
</h3>
</div>

<div>


<img src="./" alt="">
</div>


<div>
<?= $row['text']; ?>
</div>
<?php } ?>