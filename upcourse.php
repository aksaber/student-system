<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");

$cookie = $_COOKIE['name'];
$sql = mysql_query("select Tcourse from teacher where Tname='$cookie'");  //查询该老师的课程
$sqls = mysql_fetch_assoc($sql);   
$sqlss = $sqls['Tcourse'];

$result = mysql_query("select * from course where Cname='$sqlss'");

while($row = mysql_fetch_assoc($result)){
	echo "{$row['Cname']}";
	echo "{$row['Cdesc']}";
	echo "{$row['Ccredit']}";
	};

mysql_close($con);
?>