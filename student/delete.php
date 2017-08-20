<?php
header("content-type:text/html;charset=utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");

$name = $_GET['Cname'];
$cookie = $_COOKIE['name'];

$sql = "select Sname,Cname from selection where Sname='$cookie' and Cname='$name'";
$sqls = mysql_query($sql);
if(mysql_num_rows($sqls)!=0){
   $del = "delete from selection where Cname='$name' and Sname='$cookie'";
   $dels = mysql_query($del);
   echo "<script>alert('退选成功！');history.go(-1);</script>";
}else{
	echo "<script>alert('退选失败，无此课程。');history.go(-1);</script>";
	}
	
mysql_close($con);	
?>