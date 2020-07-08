<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
    
<form action="api/login.php" method="post">
<table class="center">
    <tr>
        <td width="50%" class="clo">帳號</td>
        <td width="50%"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="clo">密碼</td>
        <td><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td><input type="submit" value="登入" ><input type="reset" value="清除"></td>
        <td> <a href="?do=forget">忘記密碼</a>|<a href="?do=reg">尚未註冊</a></td>
    </tr>
</table>
</form>
</body>
</html>