<?php
include_once "./base.php";

$sql = "select * from introduction  ";
$rows = $pdo->query($sql)->fetchAll();
$sql2 = "select * from person";
$rows2 = $pdo->query($sql2)->fetchAll();
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
<?php } ?>

<?php

foreach ($rows2 as $row) {
    ?>
    <div class="center" style="padding: 30px; text-align:left;">
        <table style="width: 80%;margin:0px auto;padding:5px">
            <tr>
                <td>個人資料</td>
                <td> <?= $row['about']; ?></td>
            </tr>
            <tr>
                <td>就業狀態</td>
                <td> <?= $row['stage']; ?></td>
            </tr>
            <tr>
                <td>聯繫電話</td>
                <td> <?= $row['photonum']; ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td> <?= $row['mail']; ?></td>
            </tr>
            <tr>
                <td>通訊地址</td>
                <td> <?= $row['adress']; ?></td>
            </tr>
            <tr>
                <td>駕駛執照</td>
                <td> <?= $row['car']; ?></td>
            </tr>
            <tr>
                <td>關於我</td>
                <td style="width:60%"> <?= $row['contant']; ?></td>
            </tr>
        </table>


    </div>
<?php } ?>