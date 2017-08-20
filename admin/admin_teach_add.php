<?php 
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');   //连接数据库
mysql_select_db('y1');   //选择y1数据库
mysql_query("set names utf8");  //设置字符集

$name = $_POST['tname'];
$sex = $_POST['tsex'];
$course = $_POST['tcourse'];
$num = $_POST['tnum'];
$id = mysql_query("select count(*) from teacher");
$ids = mysql_fetch_row($id);
$Sid = $ids[0]+1;
$sql = mysql_query("insert into teacher(Tid,Tname,Tsex,Tcourse,Tnum,pass,password) values($Sid,'$name','$sex','$course',$num,MD5('123'),'123')");
if($sql){
echo "<script>alert('老师添加成功！');history.go(-1);</script>";
}else{ echo "<script>alert('老师添加失败。');history.go(-1);</script>";}
mysql_close($con);
?>
