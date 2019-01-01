<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/assets/css/admin_edit.css" />
        <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8" key="message_board_homepage" message="a message board for new studnet">
        <title>论坛首页</title>

    </head>
    <body>
        <div class="usual">
            <img src="/assets/img/1538180464_669440.png" height="50px" width="500px" alt="首页">

        </div>
        <div class="search_bar">
            <form name="search_bar" action="./posts/search.php" method="get">
                <input type="text" name="search" height="200px" id="search">
                <input type="submit" value="搜索">
            </form>
        </div>
        <div class="guiding_bar">
                <ul>
                <li><a href="admin_edit.php">管理主页</a></li>
        <?php
                require_once './inc/pager.php';
                $query_2 = pager_query('select * from posts ',$nav_html,$_GET['page']);
                require_once './inc/db.php';
                $query = $db->query('select * from categories');
            while ( $post =  $query->fetchObject()) {
          ?>
                    <li><a href="/pages/list.php?categories_id=<?php print $post->id;?>"><?php echo $post->name;?></a>
                </li>
                <?php } ?>
                <li>
                    <a href="../categories/new.php">增加分类</a>
                </li>
                </ul>
        </div>
        <div class="usual"id="user" >
            <img src="/assets/img/u=3873040750,1105020127&fm=27&gp=0.jpg" height="200px" width="200px"> 
        <div class="manage" id="posts">
        <?php
            require_once './inc/db.php';
        while ( $post =  $query_2->fetchObject()) {
      ?>
            <ul>
                <li><a href="/admin/posts/show.php?id=<?php print $post->id; ?>"><?php echo $post->title; ?></a>
            <p>
                <?php echo $post->body;?><br>
                <?php echo $post->created_at;?><br>
           </p>    
            </li><br>
                <li><a href="/admin/posts/delete.php?id=<?php echo $post->id; ?>">删除</a></li>
            </ul>
            <?php } ?>
            <div class="add_new">
            <a href="/admin/posts/new.php">添加内容</a>
            
        
        </div>
        <?php echo $nav_html; ?> 
    </body>
</html>