<?php
include_once "./base.php";

$sql = "select * from story where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

    <div class="center">
        <h3>
            <?= $row['work_name']; ?>
        </h3>
        <div>

            <p>
                <?= $row['work']; ?>
            </p>
        </div>
        <div><?= $row['proud'];?></div>
    </div>

    <div class="center">
        <h3>
            <?= $row['school_name']; ?>
        </h3>
        <p>
            <?= $row['school']; ?>
        </p>
        <div><?= $row['proud'];?></div>
    </div>


<?php } ?>