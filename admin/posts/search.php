<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>搜索结果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

require_once '../inc/db.php';
require_once '../inc/common.php';
$content = $_GET["search"];
$query = $db->prepare("SELECT * FROM posts WHERE title like'%$content%' or body like '%$content%'");
$query->execute();
while ($post = $query->fetchObject()) {
    ?>
            <ul>
                <li><a href="/admin/posts/show.php?id=<?php print $post->id; ?>"><?php echo $post->title; ?></a>
            <p>
                <?php echo $post->body; ?><br>
                <?php echo $post->created_at; ?><br>
           </p>    
            </li><br>
                <li><a href="/admin/posts/delete.php?id=<?php echo $post->id; ?>">删除</a></li>
            </ul>
            <?php 
        } ?>
</body>
</html>