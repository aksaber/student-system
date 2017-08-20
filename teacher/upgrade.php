<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');
mysql_select_db("y1");
mysql_query("set names utf8");

$cookie = $_COOKIE['name'];
$name = $_POST['name'];
$score = $_POST['score'];
$num = $_POST['snum'];

$rs = mysql_query("select Tcourse from teacher where Tname='$cookie'"); //查询该老师所教课程
$rss = mysql_fetch_assoc($rs);
$Cname = $rss['Tcourse'];

$se = mysql_query("select grade from grade where Snum=$num");
$ses = mysql_fetch_assoc($se);
if($ses['grade']){
	$update = mysql_query("update grade set grade=$score where Snum=$num");
	echo "<script>alert('成绩修改成功！');location='../teacher.php';</script>";
	}else{
		echo "<script>alert('该学生并没有成绩。');history.go(-1);</script>";
		}

mysql_close($con);
?>