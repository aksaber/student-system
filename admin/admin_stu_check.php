<?php 
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');   //连接数据库
mysql_select_db('y1');   //选择y1数据库
mysql_query("set names utf8");  //设置字符集

$sql = mysql_query("select * from student");

echo <<<Eof
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
   <center><h3 class="text-warning" style="margin-left:-80px;">学生信息</h3></center>
   <table class="table table-bordered table-hover"><tr><td>ID</td><td>姓名</td><td>性别</td><td>学号</td><td>初始密码</td><td>修改</td><td>删除</td></tr>
Eof;
while($row = mysql_fetch_assoc($sql)){
	  echo "<tr>";
	  echo "<td>{$row['Sid']}</td>";
	  echo "<td>{$row['Sname']}</td>";
	  echo "<td>{$row['Ssex']}</td>";
      echo "<td>{$row['Snum']}</td>";
      echo "<td>{$row['password']}</td>";
      echo "<td><a href='admin/admin_stu_update.php?Sid={$row['Sid']}'>更改</a></td>";
      echo "<td><a href='admin/admin_stu_del.php?Sid={$row['Sid']}'>退学</a></td>";
	  echo "<tr>";
	}
     echo "</table>";

mysql_close($con);
?>
