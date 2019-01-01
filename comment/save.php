<?php 

require_once '../admin/inc/db.php';
require_once '../admin/inc/common.php';

$sql = "insert into comment(title,body,created_at,post_id) values(:title, :body,:created_at,:post_id);" ;  
$query = $db->prepare($sql);
$query->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindParam(':body',$_POST['body'],PDO::PARAM_STR);
$query->bindParam(':created_at',$created_at,PDO::PARAM_STR);
$query->bindParam(':post_id',$_POST['post_id'],PDO::PARAM_INT);
$created_at = date('Y-m-d H:i:s');  //CURRENT_TIMESTAMP
if (!$query->execute()) { 
  print_r($query->errorInfo());
}else{
  redirect_to("../admin/posts/show_usr.php?id=" . $_POST['post_id']);
};

?>