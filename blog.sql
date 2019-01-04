# Host: localhost  (Version: 5.5.53)
# Date: 2019-01-04 18:09:11
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "categories"
#

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'认识编程'),(2,'环境搭建'),(3,'代码教学'),(5,'用户分享'),(6,'教程归档'),(7,'全新体验');

#
# Structure for table "comment"
#

CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `body` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (4,'哈哈哈哈','df','2018-11-01 06:22:26',28),(5,'df','df','2018-11-01 06:24:03',28),(6,'12','做的很好哦','2018-11-15 00:00:00',32),(7,'好好玩','好的呀','2019-01-01 15:57:43',90),(8,'还有什么想说的吗','没有了没有了没有了没有了没有了没有了没有了没有了没有了没有了没有了','2019-01-01 16:06:04',90),(9,'其他的什么东西','其他已经没有什么东西了','2019-01-01 16:09:19',90),(11,'哈哈哈','真的好笑的说','2019-01-02 16:40:40',87),(12,'Fusn','还要跨要的动易','2019-01-03 03:40:32',97),(13,'fdus','dfsd','2019-01-03 05:38:15',97);

#
# Structure for table "posts"
#

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `categories_id` int(11) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `code` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (87,'图片测试','内容什么的没有也行吧','2019-01-01 00:00:00',5,'/uploads/posts/13494.jpg',NULL),(88,'新的教程','新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程新的教程','2019-01-01 00:00:00',1,'/uploads/posts/5559.jpg',NULL),(89,'图片测试2','还有什么新的东西吗','2019-01-01 19:42:28',2,'/uploads/posts/8524.jpg',NULL),(91,'用户新的分享','期望有有一些新的内容和新的东西','2019-01-01 22:12:08',5,'/uploads/posts/31245.jpg',NULL),(92,'老的测试','凑够8个以上会有一些好的事情发生','2019-01-01 23:12:26',2,'/uploads/posts/1944.jpg',NULL),(93,'凑够9个','新的内容和东西','2019-01-01 23:34:03',3,'/uploads/posts/15345.jpg',NULL),(94,'全新的测试','还有什么内容好填的','2019-01-01 23:35:04',5,'/uploads/posts/21859.jpg',NULL),(95,'已经没有什么新的内容了','不新的内容不新的内容不新的内容不新的内容不新的内容不新的内容不新的内容不新的内容不新的内容不新的内容不新的内容','2019-01-01 23:36:54',1,'/uploads/posts/9174.jpg',NULL),(96,'特色内容','本章将通过实例讲解如何使用 Bootstrap 按钮。任何带有 class .btn 的元素都会继承圆角灰色按钮的默认外观。但是 Bootstrap 提供了一些选项来定义按钮的样式，具体如下表所示','2019-01-01 23:37:57',2,'/uploads/posts/13664.jpg',NULL),(97,'FusnFFf','\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t没有什么新的内容了\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t','2019-01-02 01:30:41',2,'/uploads/posts/29743.jpg',NULL),(98,'17051811 付申 ---新手代码指导网站','傅斯年父亲年只有青年才可以还有审美卡萨顶，无所谓其他还有什么东西还有什么dog逆袭','2019-01-03 00:16:48',7,'/uploads/posts/9943.jpg',''),(99,'17051811','其他已经没有什么可以让你取搞得了，','2019-01-03 00:20:04',3,'/uploads/posts/10990.jpg','public&nbsp;class&nbsp;HelloWorld&nbsp;{&ltbr /&gtpublic&nbsp;static&nbsp;void&nbsp;main(String[]&nbsp;args)&nbsp;{&ltbr /&gtSystem.out.println(\"Hello&nbsp;World\");&ltbr /&gt}&ltbr /&gt}'),(100,'17051811 付申 ---代码指导网站','全新的全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容全新的内容','2019-01-03 00:25:35',1,'/uploads/posts/31631.jpg','public&nbsp;class&nbsp;Test{&ltbr/&gtpublic&nbsp;static&nbsp;void&nbsp;main(String&nbsp;args[]){&ltbr/&gtStringBuffer&nbsp;sBuffer&nbsp;=&nbsp;new&nbsp;StringBuffer(\"菜鸟教程官网：\");&ltbr/&gtsBuffer.append(\"www\");&ltbr/&gtsBuffer.append(\".runoob\");&ltbr/&gtsBuffer.append(\".com\");&ltbr/&gtSystem.out.println(sBuffer);&ltbr/&gt}&ltbr/&gt}'),(101,'17051811 付申 ---指导网站','17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站\r\n17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站17051811 付申 ---指导网站','2019-01-03 00:29:36',1,'/uploads/posts/24092.jpg','public&nbsp;class&nbsp;Test&nbsp;{&ltbr&gt&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;void&nbsp;main(String&nbsp;args[]){&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//char&nbsp;grade&nbsp;=&nbsp;args[0].charAt(0);&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char&nbsp;grade&nbsp;=&nbsp;\'C\';&ltbr&gt&nbsp;&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(grade)&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;\'A\'&nbsp;:&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(\"优秀\");&nbsp;&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;\'B\'&nbsp;:&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;\'C\'&nbsp;:&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(\"良好\");&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;\'D\'&nbsp;:&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(\"及格\");&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;\'F\'&nbsp;:&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(\"你需要再努力努力\");&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default&nbsp;:&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(\"未知等级\");&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&ltbr&gt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(\"你的等级是&nbsp;\"&nbsp;+&nbsp;grade);&ltbr&gt&nbsp;&nbsp;&nbsp;}&ltbr&gt}'),(103,'17051811 付申 ---指导网站','CSS的white-space属性用于指定如何处理容器中的空白字符。\r\n\r\nwhite-space出自CSS1，适用于块状元素，具有继承性，支持IE 5.5+、Chrome、FireFox、Safari、Opera等所有主流浏览器，其默认值为normal。\r\n\r\n我们来看一下white-space可选的属性值： \r\n--------------------- \r\n作者：热血小码哥 \r\n来源：CSDN \r\n原文：https://blog.csdn.net/mmayanshuo/article/details/79429380 \r\n版权声明：本文为博主原创文章，转载请附上博文链接！','2019-01-03 00:36:26',1,'/uploads/posts/18981.jpg','public&nbsp;class&nbsp;Test{&#10&nbsp;&nbsp;public&nbsp;static&nbsp;void&nbsp;main(String&nbsp;args[]){&#10&nbsp;&nbsp;&nbsp;&nbsp;StringBuffer&nbsp;sBuffer&nbsp;=&nbsp;new&nbsp;StringBuffer(\"菜鸟教程官网：\");&#10&nbsp;&nbsp;&nbsp;&nbsp;sBuffer.append(\"www\");&#10&nbsp;&nbsp;&nbsp;&nbsp;sBuffer.append(\".runoob\");&#10&nbsp;&nbsp;&nbsp;&nbsp;sBuffer.append(\".com\");&#10&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(sBuffer);&nbsp;&nbsp;&#10&nbsp;&nbsp;}&#10}'),(104,'html5测试代码','新的旧的不分家','2019-01-03 00:39:30',1,'/uploads/posts/9602.jpg','&ltbody&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&lth1&nbsp;id=\"title1\"&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltimg&nbsp;src=\"/assets/img/logo.png.png\"&nbsp;alt=\"网站标题\"&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&lt/h1&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&ltdiv&nbsp;class=\"margin\"&nbsp;id=\"pic\"&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltimg&nbsp;src=\"/assets/img/u=415293130,2419074865&fm=27&gp=0.jpg\"&nbsp;alt=\"首页界面\"&nbsp;/&gt&#10&#10&nbsp;&nbsp;&nbsp;&nbsp;&lt/div&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&ltdiv&nbsp;class=\"login\"&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltform&nbsp;action=\"/admin/sigh_register/enter.php\"&nbsp;method=\"post\"&nbsp;onsubmit=\"return&nbsp;enter()\"&gt&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户名:&nbsp&nbsp&ltinput&nbsp;type=\"text\"&nbsp;name=\"username\"&nbsp;id=\"username\"&gt&ltbr&gt&ltbr&gt&nbsp;&nbsp&nbsp&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码:&nbsp&nbsp&ltinput&nbsp;type=\"password\"&nbsp;name=\"password\"&nbsp;id=\"password\"&gt&ltbr&gt&ltbr&gt&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltdiv&nbsp;class=\"A1\"&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltinput&nbsp;type=\"submit\"&nbsp;value=\"登录\"&gt&nbsp;&nbsp;&nbsp&nbsp&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltinput&nbsp;type=\"button\"&nbsp;value=\"注册\"&nbsp;onclick=\"register();\"&gt&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt/div&gt&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt/form&gt&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ltscript&nbsp;type=\"text/javascript\"&gt&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;enter()&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;username=document.getElementById(\"username\").value;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;password=document.getElementById(\"password\").value;&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;regex=/^[/s]+$/;&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(regex.test(username)||username.length==0)&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alert(\"用户名格式不对\");&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;false;&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(regex.test(password)||password.length==0)&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alert(\"密码格式不对\");&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;false;&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;true;&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;register()&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;window.location.href=\"/admin/sigh_register/register.html\";&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt/script&gt&nbsp;&#10&nbsp;&nbsp;&nbsp;&nbsp;&lt/div&gt');

#
# Structure for table "tags"
#

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

#
# Data for table "tags"
#

INSERT INTO `tags` VALUES (1,'教程'),(8,'18545652'),(16,'新的分享'),(20,'分享'),(21,'不新的分享'),(22,'全新标签'),(23,'没有用的东西'),(24,'标签2'),(25,'后台参照'),(26,'前端'),(27,'后台'),(28,'Php'),(29,'ruby'),(30,'全新的测试'),(31,'不新的内容'),(32,'老的标签'),(33,'标签3'),(34,'java');

#
# Structure for table "tags_posts"
#

CREATE TABLE `tags_posts` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tags_posts"
#

INSERT INTO `tags_posts` VALUES (89,25),(98,8),(91,27),(87,24),(88,1),(92,28),(93,29),(94,30),(95,31),(96,27),(97,32),(97,16),(97,33),(99,27),(100,27),(101,34),(103,27),(104,27);

#
# Structure for table "user_inof"
#

CREATE TABLE `user_inof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isdelete` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`(6))
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "user_inof"
#

INSERT INTO `user_inof` VALUES (1,'F','F',0),(2,'Fusn','gg',0),(3,'F2','123',0),(4,'F123','F',0),(5,'F1111','F',0),(6,'Fusn','578',0),(7,'FDsfs','FFF',0),(8,'Fs','FS',0),(9,'Fss','$2y$10$QeXcc6U8TRBJS',0),(10,'FSS','$2y$10$u9pcr9tW1D4np',0),(11,'FFFF','$2y$10$BRX6xwR.obmXy',0),(12,'123','$2y$10$fTg7leK/600Pw',0),(13,'1','$2y$10$hLan5eYbXALeN',0),(14,'2','$2y$10$s.T7t9Hisf3BP7nEkyi0ueoFoPjjEesb3TAs9Rgou9rW2sBIKkFjm',0),(15,'Fusn125','$2y$10$IzHMcBFAz5WjV5WSHhtx/OgFyHSj1DPYZqmMs0Ec2b.KVpj2S2XrS',0),(16,'Fusn','$2y$10$i3KYczvtEg0.LBJKxQDuJOoG5L3xvZEFkP1IYey6ygeLeIhdRjxw.',0),(17,'Fusn111','$2y$10$maZ.4GDVtZS5fN6Xt.0TV.Fx7FWYRn4WV0cvOKVi3SGtdfeiADhwW',0),(18,'F','$2y$10$9dTSQPD4Xk5F6J98t/EPiOasRDkOJnoqZRgnjW3pZeNI92xByi5.K',0),(19,'FF','$2y$10$NsvUQBpbVye/UGoeY/F9TezVtfpCLWW87GoTCjgXUZwOf28VCK2Ia',0);
