<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>发表帖子</title>
</head>
<body>
<h1>新的帖子</h1>
<form action="../posts/save.php" method="post" enctype="multipart/form-data">
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
	<label for="body">内容</label>
	<textarea name="body"></textarea>
	<br/>
	<input type="submit" value="提交" />
</form>
</body>
</html>