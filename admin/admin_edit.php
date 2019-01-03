<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/assets/css/admin_edit.css" />
        <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/Homepage.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/Homepage.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/Subpage.css" />
		<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>论坛首页</title>

    </head>
    <body>
    <div class="whole">
        <div class="logo">
            <img src="/assets/img/logo.png.png" height="100px" width="250px" alt="首页">
			<div class="search_bar">
				<form name="search_bar" action="../admin/posts/search.php" method="get">
					<input type="text" name="search" height="200px">
					<input type="submit" value="搜索">
				</form>
			</div>
        </div>
        <div class="guiding_bar">
                <ul>
                <li><a href="./admin_edit.php?page=1">主页</a></li>
        <?php
            require_once '../admin/inc/db.php';
            $query = $db->query('select * from categories');
            while ( $post =  $query->fetchObject()) {
          ?>
                    <li><a href="../pages/list.php?categories_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li>
                <?php } ?>
                <li>
                <a href="../admin/index.php">管理接口</a>
                </li>
                <li>
                <a href="../categories/new.php">+</a>
                </li>
                </ul>        			
        </div>
        <div class="rightsign">
            <div class="side_panel2">
            <ul>
                <li><a href="../index.php">主页</a></li>
        <?php
            require_once '../admin/inc/db.php';
            $query = $db->query('select * from categories');
            while ( $post =  $query->fetchObject()) {
          ?>
                    <li><a href="../pages/list.php?categories_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li>
                <?php } ?>
                <li>
                <a href="../admin/index.php">管理接口</a>
                </li>
                </ul>        			
            </div>
                <?php
                require_once '../admin/inc/db.php';
                $query = $db->query('select * from tags');
            while ( $post =  $query->fetchObject()) {
          ?>
           <div class="label1"style="margin: 3px;">  
                    <a href="../tags/show.php?tags_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li></div>
                <?php } ?>
			
		</div>
        <div class="main_page3" id="posts">
        <?php
            require_once './inc/db.php';
            require_once './inc/pager.php';
            $query_2 = pager_query('select * from posts ',$nav_html,$_GET['page']);
            $n=0;
            while ( $post =  $query_2->fetchObject()) {
                $n=$n+1;
                if($n%2==0){
          ?>
                <div class="media" style="padding: 30px; background-color: #EEEEEE;">
                        <div class="media-left media-middle">
                            <img src="../..<?php echo $post->pic; ?>" class="media-object" style="height:90px;width:200px;">
                        </div>
                        <div class="media-body">
                            <a href="./posts/show.php?id=<?php print $post->id; ?>"><h4 class="media-heading"><?php echo $post->title; ?></h4></a>
                            <p> <?php echo $post->body;?></p>
                            <?php echo $post->created_at;?>
                            <button type="button" class="btn btn-default"><a href="./posts/delete.php?id=<?php echo $post->id; ?>">删除</a></button>
                        </div>
                    </div>
                <?php }else{  ?>
                    <div class="media" style="padding: 30px;">
                        <div class="media-left media-middle">
                            <img src="../..<?php echo $post->pic; ?>" class="media-object" style="height:90px;width:200px;">
                        </div>
                        <div class="media-body">
                            <a href="./posts/show.php?id=<?php print $post->id; ?>"><h4 class="media-heading"><?php echo $post->title; ?></h4></a>
                            <p> <?php echo $post->body;?></p>
                            <?php echo $post->created_at;?>
                            <button type="button" class="btn btn-default"><a href="./posts/delete.php?id=<?php echo $post->id; ?>">删除</a></button>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    <button type="button" class="btn btn-default" style="float:right"><a href="/admin/posts/new.php">添加内容</a></button>
                    <?php echo $nav_html; ?>    
        </div>
                </div>
    </body>
</html>