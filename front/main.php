<?php
include_once "./base.php";

$sql = "select * from introduction  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

    <div class="center">
        <h2>
            <?= $row['title']; ?>
        </h2>
    </div>

    <div>
    <img src="img/1.jpg" alt="" style="width: 300px; height: 300px;border-radius: 150px; object-fit:cover;padding:10px " class="center">
    </div>
    <div class="center" style="padding: 30px;">
        <h5>
            <?= $row['text']; ?>
        </h5>
    </div>

<?php } ?>