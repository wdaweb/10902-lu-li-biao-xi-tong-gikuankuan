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
    <!-- <div style="width:90%;margin:20px auto 0px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="margin: auto;">
                    <a class="nav-item nav-link active p-3" href="#">主頁
                        <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link p-3" href="#">工作經歷</a>
                    <a class="nav-item nav-link p-3" href="#">學經歷</a>
                    <a class="nav-item nav-link p-3" href="#">作品集</a>
                </div>
            </div>
        </nav>
    </div> -->
    <!-- 導覽列 -->


    <!-- 首頁 -->
    <div class="contaner">

        <!-- <div style="display:flex;">
            <div class="photo"> <img src="img/4W9A3920.jpg" alt="" style="width: 100%;"> </div>
            <div class="introduction">
                <div><h3>個人簡介</h3></div>
                <div>
                    大四進入總業建設資訊部實習，於畢業後正式加入公司。期間經歷辦公室搬移且規劃資訊設備規格及建置，也為公司建置檔案伺服器為重要資料做分級管理備份。
                    並且也為公司規劃長期志工計畫，申請補助募資，並培訓大學生及公司同仁前往台灣偏鄉小學以及緬甸孤兒院，累計第四年（每年兩次）。
                </div>
            </div>
         
        </div>
        <div>
            <h3>技能列</h3> -->

            <div class="menu">
				<div class="tag"><a href="?do=main">個人資料</a></div>
				<div class="tag"><a href="?do=skill">能力/技能</a></div>
				<div class="tag"><a href="?do=story">經歷</a></div>
				<div class="tag"><a href="?do=work">作品集</a></div>
			</div>

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