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
<input type="search"><button>搜索</button>
<table border="1">
    <tr>
        <td>小说名称</td>
        <td>小说内容</td>
        <td>小说作者</td>
        <td>小说字数</td>
        <td>操作</td>
    </tr>
    <?php foreach ($res as $res){ ?>
    <tr>
        <td><?php echo $res->title ?></td>
        <td><?php echo $res->content ?></td>
        <td><?php echo $res->author ?></td>
        <td><?php echo $res->count ?></td>
        <td><a href="/api/sc?id=".$res->id>删除</a></td>
    </tr>
    <?php }?>
</table>
</body>
</html>