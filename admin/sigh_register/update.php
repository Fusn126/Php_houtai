<?php

$db = mysqli_connect('127.0.0.1','root','root','blog');
if (mysqli_connect_errno($db)) {
  echo "连接 MySQL 失败: " . mysqli_connect_error();
  exit;
}
mysqli_query($db,"SET NAMES utf8");

$id = $_POST['id'];
$sql = "update posts set title = '{$_POST['title']}', body = '{$_POST['body']}' where id = {$_POST['id']};" ;
if (!mysqli_query($db,$sql)) {
  echo mysqli_error($db);
  echo '<br>' .  $sql;
}else{
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ./show.php?id={$id}");
};


?>