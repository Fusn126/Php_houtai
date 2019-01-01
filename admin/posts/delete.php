<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>帖子界面</title>
</head>
<body>
  <?php
     require_once '../inc/db.php';
     require_once '../inc/common.php';
     $id = $_GET['id'];
     $query = $db->prepare("delete from posts where id = {$id};");
     $query->bindValue(':id',$id,PDO::PARAM_INT);
     $query->execute();
     redirect_back();



    ?>