<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>搜索结果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/Homepage.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/Homepage.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/Subpage.css" />
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
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
require_once '../inc/common.php';
$content = $_GET["search"];
$query = $db->prepare("SELECT * FROM posts WHERE title like'%$content%' or body like '%$content%'");
$query->execute();
$n=0;
while ($post = $query->fetchObject()) {
    $n=$n+1;
   if($n%2==0){
        ?>
              <div class="media" style="padding: 30px; background-color: #EEEEEE;">
                      <div class="media-left media-middle">
                          <img src="<?php echo $post->pic; ?>" class="media-object" style="height:90px;width:200px;">
                      </div>
                      <div class="media-body">
                          <a href="../posts/show_usr.php?id=<?php print $post->id; ?>"><h4 class="media-heading"><?php echo $post->title; ?></h4></a>
                          <p> <?php echo $post->body;?></p>
                          <?php echo $post->created_at;?><br>
                      </div>
                  </div>
              <?php }else{  ?>
                  <div class="media" style="padding: 30px;">
                      <div class="media-left media-middle">
                          <img src="<?php echo $post->pic; ?>" class="media-object" style="height:90px;width:200px;">
                      </div>
                      <div class="media-body">
                          <a href="../posts/show_usr.php?id=<?php print $post->id; ?>"><h4 class="media-heading"><?php echo $post->title; ?></h4></a>
                          <p> <?php echo $post->body;?></p>
                          <?php echo $post->created_at;?><br>
                      </div>
                  </div>
                  <?php } ?>
                  <?php } ?>
        </div>
    </div>
</body>
</html>