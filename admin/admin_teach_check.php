<?php 
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');   //连接数据库
mysql_select_db('y1');   //选择y1数据库
mysql_query("set names utf8");  //设置字符集

$sql = mysql_query("select * from teacher");

echo <<<Eof
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
   <center><h3 class="text-warning" style="margin-left:-80px;">老师信息</h3></center>
   <table class="table table-bordered table-hover"><tr><td>ID</td><td>姓名</td><td>性别</td><td>所属课程</td><td>学工号</td><td>初始密码</td><td>修改</td><td>删除</td></tr>
Eof;
while($row = mysql_fetch_assoc($sql)){
	  echo "<tr>";
	  echo "<td>{$row['Tid']}</td>";
	  echo "<td>{$row['Tname']}</td>";
	  echo "<td>{$row['Tsex']}</td>";
      echo "<td>{$row['Tcourse']}</td>";
      echo "<td>{$row['Tnum']}</td>";
      echo "<td>{$row['password']}</td>";
      echo "<td><a href='admin/admin_teach_update.php?Tid={$row['Tid']}'>更改</a></td>";
      echo "<td><a href='admin/admin_teach_del.php?Tid={$row['Tid']}'>裁员</a></td>";
	  echo "<tr>";
	}
     echo "</table>";

mysql_close($con);
?>
