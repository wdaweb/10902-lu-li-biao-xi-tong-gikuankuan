<?php
include_once "./base.php";

$sql = "select * from story where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

    <div class="center">
        <h4>
            <?= $row['work_name']; ?>
        </h4>
        <div>

            <p>
                <?= $row['work']; ?>
            </p>
        </div>
        <div><?= $row['proud'];?></div>
    </div>

    <div class="center">
        <h4>
            <?= $row['school_name']; ?>
        </h4>
        <p>
            <?= $row['school']; ?>
        </p>
        <div><?= $row['proud'];?></div>
    </div>


<?php } ?>