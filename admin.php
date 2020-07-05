<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>繼寬kuan的電子履歷</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <?php
    include_once "base.php";
    ?>
</head>

<body>
    
    <!-- 導覽列 -->


    <!-- 首頁 -->
    <h3>新增/修改/刪除</h3>
        <div class="menu">
            <div class="tag"><a href="?do=ed_main">個人資料</a></div>
            <div class="tag"><a href="?do=ed_skill">能力/技能</a></div>
            <div class="tag"><a href="?do=ed_story">經歷</a></div>
            <div class="tag"><a href="?do=ed_work">作品集</a></div>
        </div>
    <div class="contaner">


            <div class="main">
						<?php
						$do = (!empty($_GET['do'])) ? $_GET['do'] : "main";
						$file = "front/" . $do . ".php";
						if (file_exists($file)) {
							include $file;
						} else {
							include "front/main.php";
						}
						?>
			</div>
            

        </div>
        <div></div>
        <div></div>










    </div>

    <!-- 首頁 -->
</body>

</html>