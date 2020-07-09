<?php
include_once "./base.php";

$sql = "select * from skill where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>

<h3>技能/證照</h3>
<?php
foreach ($rows as $row) {
?>
    <div style="align-items: center;">

        <table style="width:60%;margin:0px auto;text-align:left">
            <tr style="width: 20%;text-align:center">
                <td>
                    <h5>
                        <?= $row['name']; ?>
                    </h5>
                </td>
                <td style="width: 80%;">
                    <div style="background: blue;height: 10px;width:calc(100% * calc(<?= $row['value'] ?>/100));margin:0px 0px 10px 20px"></div>
                </td>
            </tr>
            <tr>
                <td  style="width: 20%;text-align:center">
                    <h6>補充</h6>
                </td>
                <td><?= $row['other'] ?></td>
            </tr>
        </table>
    </div>
    <hr>


<?php } ?>