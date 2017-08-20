<?php

header("content-type:text/html;charset=utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");

$cookie = $_COOKIE["name"];

$Cname = mysql_query("select Tcourse from teacher where Tname='$cookie'");
$t = mysql_fetch_assoc($Cname);
$ts = $t['Tcourse'];
 
  $sql = "select Sname from selection where Cname='{$ts}'";
  $sqls = mysql_query($sql);  //找到所选课程的学生名字
  
echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <center><h3 class="text-info" style="margin-left:-80px;">选课学生</h3></center>
    <table class="table table-bordered table-hover"><tr><td>学生名</td><td>性别</td><td>学号</td><td>成绩</td></tr>
    
Eof;
  
  while($row=mysql_fetch_assoc($sqls)){
     $row_name = $row['Sname'];
     $res = mysql_query("select * from student where Sname='$row_name'");
     $rows = mysql_fetch_assoc($res);
     $sc = mysql_query("select grade from grade where Sname='$row_name'");
     $scs = mysql_fetch_assoc($sc);
     echo "<tr>";
     echo "<td>$row_name</td>";
     echo "<td>{$rows['Ssex']}</td>";
     echo "<td>{$rows['Snum']}</td>";
     echo "<td>{$scs['grade']}</td>";
     echo "</tr>";
  }
  
  echo "</table>";

mysql_close($con);
?>