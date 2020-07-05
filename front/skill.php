<?php
include_once "./base.php";

$sql = "select * from skill where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

<div class="center"><h3>
<?= $row['name']; ?>
</h3>
<input type="range" value="<?=$row['value']?>">
</div>

<?php } ?>