<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../../assets/css/Homepage.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/Homepage.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/Subpage.css" />
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>帖子内容</title>
</head>
<body>
<div class="whole">
        <div class="logo">
            <img src="../../assets/img/logo.png.png" height="100px" width="250px" alt="首页">
			<div class="search_bar">
				<form name="search_bar" action="/admin/posts/search.php" method="get">
					<input type="text" name="search" height="200px">
					<input type="submit" value="搜索">
				</form>
			</div>
        </div>
        <div class="guiding_bar">
                <ul>
                <li><a href="../admin_edit.php?page=1">主页</a></li>
        <?php
                require_once '../../admin/inc/db.php';
                $query = $db->query('select * from categories');
            while ( $post =  $query->fetchObject()) {
          ?>
                    <li><a href="../../pages/list.php?categories_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li>
                <?php } ?>
                <li>
                <a href="../../admin/index.php">管理接口</a>
                </li>
                </ul>        			
        </div>
        <div class="rightsign">
        <div class="side_panel2">
            <ul>
                <li><a href="../../index.php">主页</a></li>
        <?php
            require_once '../../admin/inc/db.php';
            $query = $db->query('select * from categories');
            while ( $post =  $query->fetchObject()) {
          ?>
                    <li><a href="../../pages/list.php?categories_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li>
                <?php } ?>
                <li>
                <a href="../../admin/index.html">管理接口</a>
                </li>
                </ul>        			
            </div>
                <?php
                require_once '../../admin/inc/db.php';
                $query = $db->query('select * from tags');
            while ( $post =  $query->fetchObject()) {
          ?>
           <div class="label1"style="margin: 3px;">  
                    <a href="../../tags/show.php?tags_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li></div>
                <?php } ?>
			
    </div>
    <div class="main_page3">
  <?php        
    require_once '../inc/db.php';    
    $query = $db->prepare('select * from posts where id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetchObject();    
  ?>

   <h1 style="text-align:center"> <?php echo $post->title; ?>  </h1>
  <img src="../../<?php echo $post->pic; ?>" height="30%" width="70%"> 
  <p><?php echo $post->body; ?></p>
  <pre><?php echo $post->code; ?></pre>
  <button type="button" class="btn btn-default"><a href="../../admin/posts/edit.php?id=<?php echo $post->id;?>">修改</a></button>
  <button type="button" class="btn btn-default"><a href="../../admin/admin_edit.php?page=1">返回</a></button><br/>
  <hr>
  <h2 style="font-size:25px">评论:</h2>
  <hr>
  <?php
    $query = $db->query('select * from comment where post_id = ' . $_GET['id']);
    while ( $comment =  $query->fetchObject() ) {
      ?>
          <div>
            <h4><?php echo $comment->title; ?></h4>
            <p style="margin-left:30px"><?php echo $comment->body; ?></p> 
            <span><?php echo $comment->created_at;?></span>           
    </div>
    <button type="button" class="btn btn-default"> <a href="../../comment/delete.php?id=<?php echo $comment->id?>">删除评论</a> </button>
    <?php  } ?>
    </div>
    </div>


</body>
</html>