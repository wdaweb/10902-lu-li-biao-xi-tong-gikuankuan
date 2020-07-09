<?php
include_once "./base.php";

$sql = "select * from skill where sh = 1  ";
$rows = $pdo->query($sql)->fetchAll();
?>

<h3>技能/證照</h3>
<div style="height:250px;overflow:auto;">
<?php
foreach ($rows as $row) {
?>
    <form action="api/skill.php" method="post">
        <div style="align-items: center;">

            <table style="width:60%;margin:auto;text-align:left">
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
                    <td style="width: 20%;text-align:center">
                        <h6>補充</h6>
                    </td>
                    <td><?= $row['other'] ?></td>
                </tr>
                <tr>
                   
                </tr>
            </table>
        </div>
        <hr>
        <?php } ?>
    </div>

<table style="width: 50%;margin:auto;">
    <tr>
        <td>技能名稱</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>能力</td>
        <td>1<input type="range" min="1" max="100" step="1" value="value[]">100</td>
    </tr>
    <tr>
        <td>補充</td>
        <td><input type="text" name="other"></td>
    </tr>
    <tr>
        <td colspan="2"> <input type="submit" value="送出"></td>
    </tr>
</table>
</form>

