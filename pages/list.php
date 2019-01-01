<!Doctype html>
<html>
    <head>
         <meta charset="UTF-8" key="message_board_homepage" message="a message board for new studnet">
         <link rel="stylesheet" type="text/css" href="../assets/css/Homepage.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/Homepage.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/Subpage.css" />
		<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>首页</title>
    </head>
    <body>
		<div class="whole">
        <div class="logo">
            <img src="/assets/img/logo.png.png" height="100px" width="250px" alt="首页">
			<div class="search_bar">
				<form name="search_bar" action="search.php" method="get">
					<input type="text" name="user" height="200px">
					<input type="submit" value="搜索">
				</form>
			</div>
        </div>
        <div class="guiding_bar">
                <ul>
                <li><a href="../index.php">主页</a></li>
        <?php
                require_once '../admin/inc/db.php';
                $query = $db->query('select * from categories');
            while ( $post =  $query->fetchObject()) {
          ?>
                    <li><a href="/pages/list.php?categories_id=<?php print $post->id;?>"><?php echo $post->name;?></a>
                </li>
                <?php } ?>
                </ul>
                
			
        </div>
        <div class="rightsign">
                <?php
                require_once '../admin/inc/db.php';
                $query = $db->query('select * from tags');
            while ( $post =  $query->fetchObject()) {
          ?>
           <div class="label1"style="margin: 3px;">  
                    <a href="../tags/show.php?tags_id=<?php print $post->id;?>"><?php echo $post->name;?></a></li></div>
                <?php } ?>
			
		</div>  
        <div class="main_page3">
        <?php
            require_once '../admin/inc/db.php';
            $qus=$_GET['categories_id'];
            $query = $db->query( "SELECT * FROM posts where categories_id= '$qus'");
            $n=0;
        while ( $post =  $query->fetchObject()) {
            $n=$n+1;
            if($n%2==0){ 
      ?>
            <div class="media" style="padding: 30px; background-color: #EEEEEE;">
					<div class="media-left media-middle">
						<img src="..<?php echo $post->pic; ?>" class="media-object" style="height:90px;width:200px;">
					</div>
					<div class="media-body">
						<a href="../admin/posts/show.php?id=<?php print $post->id; ?>"><h4 class="media-heading"><?php echo $post>title; ?></h4></a>
						<p> <?php echo $post->body;?></p>
                        <?php echo $post->created_at;?><br>
					</div>
				</div>
            <?php }else{  ?>
                <div class="media" style="padding: 30px;">
					<div class="media-left media-middle">
						<img src="..<?php echo $post->pic; ?>" class="media-object" style="height:90px;width:200px;">
					</div>
					<div class="media-body">
						<a href="../admin/posts/show.php?id=<?php print $post->id; ?>"><h4 class="media-heading"><?php echo $post->title; ?></h4></a>
						<p> <?php echo $post->body;?></p>
                        <?php echo $post->created_at;?><br>
					</div>
				</div>
                <?php } ?>
                <?php } ?>
			</div>
        </div>
			
    <footer>
        <p class="Disclaimer">x.com 版权所有,未经允许不得转载</p>
        <p>
        <a href="index.html">关于我们</a>
        <a href="index.html">联系我们</a>
        <a href="index.html">帮助</a>
        </p>
        <p>Copyright © 2018</p>
    </footer>
	</div>



    </body>
</html>