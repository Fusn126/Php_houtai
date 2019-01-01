<html>
<form action="./save.php" method="post">
    <input type="hidden" name='post_id' value='<?php echo $_GET['id']; ?>'/>
    <label for="name">题目</label>
    <input type="text" name="name" value="" />
    <input type="submit" value="提交" />
  </form>
  </html>