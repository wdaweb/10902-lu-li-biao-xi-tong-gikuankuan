<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input{
            width: 80%;
            padding: 0px;
            margin: 0px;
        }
        input.chk{

            width: 10%;
        }

    </style>
</head>

<body>


    <?php
    include_once "./base.php";

    $sql = "select * from school where sh = 1  ";
    $rows = $pdo->query($sql)->fetchAll();
    ?>



    <h2>世新大學</h2>
    <table style="width:100%;margin:auto;text-align:left">
        <tr>
            <td style="width: 25%;">時間</td>
            <td style="width: 25%;">單位</td>
            <td style="width: 25%;">職稱</td>
            <td style="width: 25%;">顯示/刪除</td>
        </tr>
        <form action="api/story.php" method="POST">
            <?php
            foreach ($rows as $row) {
                $checked = ($row['sh'] == 1) ? "checked" : "";
            ?>
                <tr>
                    <td><input type="text" name="date[]" value=" <?= $row['date']; ?>"></td>
                    <td><input type="text" name="location[]" value=" <?= $row['location']; ?>"></td>
                    <td><input type="text" name="job[]" value=" <?= $row['job']; ?>"></td>
                    <td>
                        <input type="checkbox" class="chk" name="sh[]" value="<?= $row['id'] ?>" <?= $checked; ?>>顯示
                        <input type="checkbox" class="chk" name="del[]" value="<?= $row['id'] ?>">刪除
                    </td>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                </tr>
            <?php } ?>
    </table>

    <hr>


    <table>
        <tr>
            <td style="width: 25%;">時間</td>
            <td style="width: 30%;">單位</td>
            <td style="width: 30%;">職稱</td>
        </tr>
        <tr>
            <td><input type="text" name="date"></td>
            <td><input type="text" name="location"></td>
            <td><input type="text" name="job"></td>

        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="送出"></td>
        </tr>
    </table>
    <form>


    </form>
</body>

</html>