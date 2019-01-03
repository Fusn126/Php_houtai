<!doctype html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/css/admin_index.css" />
    <meta charst="utf-8" key="message board" message="a message board for new studnet">
    <title>
        登陆界面
    </title>
</head>
<body>
  <?php
      require_once '../admin/inc/session.php'; 
      if(is_login()){
        redirect_to("./admin_edit.php?page=1");
      }
     ?>
    <h1 id="title1">
        <img src="/assets/img/logo.png.png" alt="网站标题">
    </h1>
    <div class="margin" id="pic">
         <img src="/assets/img/u=415293130,2419074865&fm=27&gp=0.jpg" alt="首页界面" />

    </div>
    <div class="login">
        <form action="/admin/sigh_register/enter.php" method="post" onsubmit="return enter()"> 
            用户名:&nbsp&nbsp<input type="text" name="username" id="username"><br><br> &nbsp&nbsp
            密码:&nbsp&nbsp<input type="password" name="password" id="password"><br><br> 
            <div class="A1">
            <input type="submit" value="登录">  &nbsp&nbsp
              <input type="button" value="注册" onclick="register();"> 
            </div>
        </form> 
         
          <script type="text/javascript"> 
            function enter() 
            { 
              var username=document.getElementById("username").value;
              var password=document.getElementById("password").value; 
              var regex=/^[/s]+$/; 
              if(regex.test(username)||username.length==0) 
                { 
                  alert("用户名格式不对"); 
                  return false; 
                } 
              if(regex.test(password)||password.length==0)
              { 
                alert("密码格式不对"); 
                return false; 
              } 
              return true; 
            } 
            function register() 
            { 
              window.location.href="/admin/sigh_register/register.html";
            } 
          </script> 
    </div>
    <div class="footer">
    <footer>
        <a href="#">联系我们</a>
        <a href="#">意见反馈</a>
        <a href="#">网站邮箱</a>
        <a href="#">友谊链接</a>
    </footer>
    </div>

</body>