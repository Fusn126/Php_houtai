<?php 

require_once '../inc/db.php';
require_once '../inc/common.php';
$id = $_POST['id'];
$sql = "update posts set title = :title, body = :body where id = :id;" ;	
$query = $db->prepare($sql);
$query->bindValue(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindValue(':body',$_POST['body'],PDO::PARAM_STR);
echo $query->bindValue(':id',$id,PDO::PARAM_INT);

if (!$query->execute()) 
{	
	print_r($query->errorInfo());
}else{
$post_id=$id;
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
  redirect_to("show.php?id={$id}");

}


?>