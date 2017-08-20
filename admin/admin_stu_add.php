<?php 
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');   //连接数据库
mysql_select_db('y1');   //选择y1数据库
mysql_query("set names utf8");  //设置字符集

$name = $_POST['sname'];
$sex = $_POST['ssex'];
$num = $_POST['snum'];
$id = mysql_query("select count(*) from student");
$ids = mysql_fetch_row($id);
$sql = mysql_query("insert into student(Sname,Ssex,Snum,pass,password) values('$name','$sex',$num,MD5('123'),'123')");
if($sql){
echo "<script>alert('学生添加成功！');history.go(-1);</script>";
}else{ echo "<script>alert('学生添加失败。');history.go(-1);</script>";}
mysql_close($con);
?>
