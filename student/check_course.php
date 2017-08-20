<?php
header("content-type:text/html;charset:utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db('y1',$con);
mysql_query('set names utf8');

$cookie = $_COOKIE['name'];

$sql = "select Cname from selection where Sname='$cookie'";
$sqls = mysql_query($sql);


echo <<<Eof
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

   
Eof;

while($row=mysql_fetch_assoc($sqls)){
	
	$sql_t ="select Tname from teacher where Tcourse='{$row['Cname']}'";
	$sqls_t = mysql_query($sql_t);
	$rows = mysql_fetch_assoc($sqls_t);
	echo "<h4 class='text-primary'>所选课程：<span style='color:red'>{$row['Cname']}</span> ------ 老师：<span style='color:red'>{$rows['Tname']}</span></h4>";
	}

mysql_close($con);
?>