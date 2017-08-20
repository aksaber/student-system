<?php
header("content-type:text/html;charset=utf-8");
$con=mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query('set names utf8');

$sql="delete from student where Sid={$_GET['Sid']}";
$rst=mysql_query($sql);

if($rst){
	echo "<script>alert('删除成功！');location='../admin.php';</script>";
	}else{
		echo "<script>alert('删除失败');history.go(-1);</script>";
		}

mysql_close($con);
?>