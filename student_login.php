<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root',123);
mysql_select_db('y1');
mysql_query("set names utf8");

$pass = MD5($_POST['pass']);
$num = $_POST['snum'];

$sql = "select Sname from student where pass='$pass' and Snum=$num";
$sqls = mysql_query($sql);
$result = mysql_fetch_assoc($sqls);
$name = $result['Sname'];

if($result){
	setcookie('name',$name,time()+3600);
    echo "<script>location='student.php'</script>";	
	}else {
		echo "<script>alert('登录失败！');history.go(-1);</script>";
		}
mysql_close($con);
?>