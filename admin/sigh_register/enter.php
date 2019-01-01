<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>登录系统的后台执行过程</title> 
</head> 
<body> 
  <?php 
  session_start();
  require_once '../inc/db.php';
  require_once '../inc/common.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $dbusername = null;
  $dbpassword = null;
  $query = $db->prepare("select * from user_inof where username ='{$username}' and isdelete =0;");//查出对应用户名的信息，isdelete表示在数据库已被删除的内容
  $query->execute();
  while ($post = $query->fetchObject()) {//while循环将$result中的结果找出来 
    $dbusername = $post->username;
    $dbpassword = $post->password;
  }
  if (is_null($dbusername)) {//用户名在数据库中不存在时跳回index.html界面 
    ?> 
  <script type="text/javascript">                                                                              
    alert("用户名不存在"); 
    window.location.href="../index.html"; 
  </script> 
  <?php 
} else {
  if (!password_verify($password,$dbpassword)) {
    ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="../index.html"; 
  </script> 
  <?php 
} else {
  $_SESSION["username"] = $username;
  $_SESSION["code"] = mt_rand(0, 100000);
  ?> 
  <script type="text/javascript"> 
    window.location.href="/admin/admin_edit.php?page=1"; 
  </script> 
  <?php 
}
}
?> 
</body> 
</html> 