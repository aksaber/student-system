<?php
header("content-type:text/html;charset=utf-8");
$con =mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query('set names utf8');

$Sid=$_POST['sid'];
$name=$_POST['sname'];
$sex=$_POST['ssex'];
$num=$_POST['snum'];

$sql="update student set Sname='{$name}',Ssex='{$sex}',Snum='{$num}' where Sid={$Sid}";
$rst=mysql_query($sql);
if($rst){
	echo "<script>alert('修改成功！');location='../admin.php';</script>";
	}else{
		echo "<script>alert('修改失败。');history.go(-1);</script>";
		}
mysql_close($con);
?>