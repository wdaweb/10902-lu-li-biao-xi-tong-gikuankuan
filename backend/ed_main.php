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
<form action="api/save_title.php" method="POST">
    <div class="center" >
        <h4 >
           更改標題
        </h4>
        <h4>
            <input type="text" name="title" value="<?= $row['title']; ?>">
        </h4>
    </div>
    <input type="submit" value="更改">
    <div>
        <img src="http://220.128.133.15/s1090210/resume/img/1.jpg" alt="" style="width: 300px; height: 300px;border-radius: 150px; object-fit:cover;padding:10px " class="center">
    </div>
    </form>
<?php } ?>
<!-- 標題修改 -->


<?php

foreach ($rows2 as $row) {
    ?>

    <form action="api/save_main.php" method="POST">
    <div class="center" style="padding: 10px; text-align:left;">
        <table style="width: 50%;margin:0px auto;padding:5px">
            <tr>
                <td style="width: 30%;">個人資料</td>
                <td style="width: 80%;"> <input type="text" name="about" value="<?= $row['about'];?>"></td>
            </tr>
            <tr>
                <td>就業狀態</td>
                <td><input type="text" name="stage" value="<?= $row['stage']; ?>"></td>
            </tr>
            <tr>
                <td>聯繫電話</td>
                <td><input type="text" name="photonum" value="<?= $row['photonum']; ?>"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="mail" value="<?= $row['mail']; ?>"></td>
            </tr>
            <tr>
                <td>通訊地址</td>
                <td><input type="text" name="adress" value="<?= $row['adress']; ?>"></td>
            </tr>
            <tr>
                <td>駕駛執照</td>
                <td> <input type="text" name="car" value="<?= $row['car']; ?>"></td>
            </tr>
            <tr>
                <td>關於我</td>
                <td ><input type="text" name="contant" value="<?= $row['contant']; ?>">
            </td>
            </tr>
        </table>
    </div>
    <input type="submit" value="更新">
    </form>

<?php } ?>