<?php 
require_once '../admin/inc/db.php';
require_once '../admin/inc/common.php';
$sql = "insert into categories(name) values(:name);" ;	
$query = $db->prepare($sql);
$query->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	redirect_to("../");
};

?>