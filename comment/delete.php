<?php 

   require_once '../admin/inc/db.php';
   require_once '../admin/inc/common.php';
   $id = $_GET['id'];
   $query = $db->prepare("delete from comment where id = {$id};");
   $query->bindValue(':id',$id,PDO::PARAM_INT);
   $query->execute();
   redirect_back();
      
?>
