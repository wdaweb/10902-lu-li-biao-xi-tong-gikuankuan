<?php
include_once "./base.php";

$sql = "select * from introduction  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

<div class="center"><h3>
<?= $row['title']; ?>
</h3>
</div>

<div>


<img src="img/1.jpg" alt="" style="width: 200px;" class="center">
</div>


<div class="center">
<?= $row['text']; ?>
</div>
<?php } ?>