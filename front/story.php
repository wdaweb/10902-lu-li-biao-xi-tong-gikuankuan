<?php
include_once "./base.php";

$sql = "select * from story where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>



<?php

foreach ($rows as $row) {
?>

    <div class="center">
        <h2>
            <?= $row['work_name']; ?>
        </h2>
        <div>
            <p>
                <?= $row['work']; ?>
            </p>
        </div>
        <div><?= $row['proud']; ?></div>
    </div>
    </div>
    <div class="center" style="padding: 20px;">
        <h2>
            <?= $row['school_name']; ?>
        </h2>
        <p>
            <?= $row['school']; ?>
        </p>
        <div><?= $row['school_proud']; ?></div>
    </div>


<?php } ?>