<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>帖子内容</title>
</head>
<body>
  <?php        
    require_once '../inc/db.php';    
    $query = $db->prepare('select * from posts where id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetchObject();    
  ?>

  <h1><?php echo $post->id; ?> : <?php echo $post->title; ?>  </h1>
  <img src="../..<?php echo $post->pic; ?>" height="200px" width="200px"> 
  <p><?php echo $post->body; ?></p>
  <a href="/admin/posts/edit.php?id=<?php echo $post->id;?>">修改</a><br/>
  <a href="/admin/admin_edit.php?page=1">返回</a>
  <?php
    $query = $db->query('select * from comment where post_id = ' . $_GET['id']);
    while ( $comment =  $query->fetchObject() ) {
      ?>
          <li>
            <h4><?php echo $comment->title; ?></h4>
            <p><?php echo $comment->body; ?></p> 
            <span><?php echo $comment->created_at;?></span>           
          </li> 
          <a href="../../comment/delete.php?id=<?php echo $comment->id?>">删除评论</a> 
    <?php  } ?>


</body>
</html>