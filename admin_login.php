<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root',123);
mysql_select_db('y1');
mysql_query("set names utf8");

$name = $_POST['name'];  
$password = MD5($_POST['password']); 


$sql = mysql_query("select Aid from admin where name='$name' and password='$password' limit 1");
$sqls = mysql_fetch_array($sql);
if($sqls){
	setcookie('name',$name,time()+3600);
	echo "<script>location='admin.php';</script>";
	}else {
		echo "<script>alert('登录失败。');history.go(-1);</script>";
		}

mysql_close($con);
?>