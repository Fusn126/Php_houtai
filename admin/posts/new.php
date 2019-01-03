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
  <title>发表帖子</title>
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
    <h1 style="text-align:center">新的帖子</h1>
    <hr>
<form action="../posts/save.php" method="post" enctype="multipart/form-data">
<label for="choose">分类</label>
<select name="choose">
<?php
require_once '../inc/db.php';
$query = $db->query('select * from categories');
while ($post = $query->fetchObject()) {
  ?>
                <option value="<?php echo $post->name; ?>"><?php echo $post->name; ?></option>
                <?php 
              } ?>
            </select>
<br/>
	<label for="title">标题</label>
	<input type="text" name="title" value="" />
  <br/>
  <label for="tags">标签</label>
	<input type="text" name="tags" value="" />
  <br/>
  <label for="pics">上传图片</label>
  <br/>
  <input type="file" name="pics" id="pics"/>
  <br/>
  <p>内容:</p>
  <br>
	<textarea name="body" style="width:500px; height:400px; margin-left:50px"></textarea>
  <br/>
  <p>代码:</p>
  <br>
	<textarea name="code" style="width:500px; height:400px; margin-left:50px"></textarea>
	<br/>
	<input type="submit" value="提交" style="margin-left:600px" />
</form>
            </div>
            </div>
</body>
</html>