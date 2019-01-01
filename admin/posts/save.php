<?php 

require_once '../inc/db.php';
require_once '../inc/common.php';
$inof = $_POST['choose'];
$sql = "insert into posts(title,body,created_at,categories_id,pic) values(:title, :body,:created_at,:categories_id,:pic);";
$query2 = $db->query("SELECT * FROM categories WHERE name ='$inof'");
$post = $query2->fetchObject();
$query = $db->prepare($sql);
$id = intval($post->id);
var_export($_FILES);
$dest_path = "/uploads/posts/" . rand() . ".jpg";
$dest = $_SERVER["DOCUMENT_ROOT"] . $dest_path;
var_export($dest);
move_uploaded_file($_FILES["pics"]["tmp_name"], $dest);
$query->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
$query->bindParam(':body', $_POST['body'], PDO::PARAM_STR);
$query->bindParam(':created_at', $created_at, PDO::PARAM_STR);
$query->bindValue(':categories_id', $id, PDO::PARAM_INT);
$query->bindValue('pic', $dest_path, PDO::PARAM_INT);
if (!$query->execute()) {
	print_r($query->errorInfo());
} 
$post_id=$db->lastInsertId();
$flag=0;
$tags = $_POST['tags'];
$query3 = $db->query("SELECT * FROM tags WHERE name='$tags'");
while ( $tag_from =  $query3->fetchObject() ) {
	    
		if(strcmp($tags,$tag_from->name)==0){
			$flag=1;
			$tag_id=$tag_from->id;
		}


}
if ($flag==1) {
	$query5 = $db->prepare("insert into tags_posts (post_id,tag_id) values(:post_id,:tag_id);");
	$query5->bindParam(':post_id', $post_id, PDO::PARAM_STR);
	$query5->bindParam(':tag_id', $tag_id, PDO::PARAM_STR);
	$query5->execute();
	redirect_to("../admin_edit.php?page=1");
} 
else {
	$sql2 = "insert into tags(name) values(:name);";
	$query4 = $db->prepare($sql2);
	$query4->bindParam(':name', $tags, PDO::PARAM_STR);
	$query4->execute();
	$tag_id=$db->lastInsertId();
	$query5 = $db->prepare("insert into tags_posts (post_id,tag_id) values(:post_id,:tag_id);");
	$query5->bindParam(':post_id', $post_id, PDO::PARAM_STR);
	$query5->bindParam(':tag_id', $tag_id, PDO::PARAM_STR);
	$query5->execute();
	redirect_to("../admin_edit.php?page=1");
}
?>