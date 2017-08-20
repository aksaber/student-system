<?php
header("content-type:text/html;charset=utf-8");
$con =mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query('set names utf8');

$Tid=$_POST['tid'];
$name=$_POST['tname'];
$sex=$_POST['tsex'];
$course=$_POST['tcourse'];
$num=$_POST['tnum'];

$sql="update teacher set Tname='{$name}',Tsex='{$sex}',Tcourse='{$course}',Tnum='{$num}' where Tid={$Tid}";
$rst=mysql_query($sql);
if($rst){
	echo "<script>alert('修改成功！');location='../admin.php';</script>";
	}else{
		echo "<script>alert('修改失败。');history.go(-1);</script>";
		}
mysql_close($con);
?>