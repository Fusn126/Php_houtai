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
  <title>修改界面</title>
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
		$id = $_GET['id'];
	    $query = $db->prepare('select * from posts where id = :id');
	    $query->bindValue(':id',$id,PDO::PARAM_INT);
	    $query->execute();
	    $post = $query->fetchObject();    		
	?>
	<h1 style="text-align:center">修改帖子:</h1>
	<hr>
	<form action="/admin/posts/update_tiezi.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		<label for="title">题目</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" />
		<br/>
		<label for="tags">标签</label>
		<input type="text" name="tags" value="" />
		<br>
		<label for="body">内容</label><br>
		<textarea name="body"  style="width:500px; height:800px; margin-left:30px">
			<?php echo $post->body; ?>
		</textarea>
		<br/>
		<input type="submit" value="提交"style="margin-left:600px" />
	</form>
			</div>
			</div>

</body>
</html>