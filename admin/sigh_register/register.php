
<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
  <title>注册用户</title> 
</head> 
<body> 
  <?php 
  session_start();
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  require_once '../inc/db.php';
  require_once '../inc/common.php';
  $dbusername = null;
  $dbpassword = null;
  $query = $db->prepare("select * from user_inof where username ='{$username}' and isdelete =0;");//查出对应用户名的信息，isdelete表示在数据库已被删除的内容
  $query->execute();
  while ($post = $query->fetchObject()) {//while循环将$result中的结果找出来 
    $dbusername = $post->username;
    $dbpassword = $post->password;
  }
  if (!is_null($dbusername)) {
    ?> 
  <script type="text/javascript"> 
    alert("用户已存在"); 
    window.location.href="register.html"; 
  </script>  
  <?php 
}
$hash=password_hash($_POST['password'], PASSWORD_DEFAULT);
$query = $db->prepare("insert into user_inof(username,password) values(:username,:password);");
$query->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$query->bindParam(':password', $hash, PDO::PARAM_STR);
if (!$query->execute()) {
	print_r($query->errorInfo());
} 

?> 
  <script type="text/javascript"> 
    alert("注册成功"); 
    window.location.href="../index.html"; 
  </script>      
</body> 
</html> 