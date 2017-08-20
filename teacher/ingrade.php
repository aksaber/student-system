<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');
mysql_select_db("y1");
mysql_query("set names utf8");

$cookie = $_COOKIE['name'];
$num = $_POST['snum'];
$score = $_POST['score'];
$name = $_POST['sname'];

$rs = mysql_query("select Tcourse from teacher where Tname='$cookie'"); //查询该老师所教课程
$rss = mysql_fetch_assoc($rs);
$Cname = $rss['Tcourse'];

$sc = mysql_query("select grade from grade where Snum='$num'");  //查询该学生之前有无成绩
$scs = mysql_fetch_assoc($sc);

if(!$scs['grade']){
	$sql = mysql_query("insert into grade(Sname,Cname,grade,Snum) values('$name','$Cname',$score,$num)");
	 echo "<script>alert('成绩录入成功！');location='../teacher.php';</script>";
	}else{
		echo "<script>alert('该学生已有成绩。');history.go(-1);</script>";
		}


mysql_close($con);
?>