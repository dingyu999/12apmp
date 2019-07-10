<?php
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/api/add" method="post">
    <table border="1">
        <tr>
            <td>小说名称</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>小说内容</td>
            <td><input type="text" name="content"></td>
        </tr>
        <tr>
            <td>小说作者</td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td>小说字数</td>
            <td><input type="text" name="count"></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>
</body>
</html>
