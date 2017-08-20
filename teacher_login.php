<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root',123);
mysql_select_db('y1');
mysql_query("set names utf8");

$pass = MD5($_POST['pass']);
$num = $_POST['tnum'];

$sql = "select Tname from teacher where pass='$pass' and Tnum=$num";
$sqls = mysql_query($sql);
$result = mysql_fetch_assoc($sqls);
$name = $result['Tname'];

if($result){
	setcookie('name',$name,time()+3600);
    echo "<script>location='teacher.php'</script>";	
	}else {
		echo "<script>alert('登录失败！');history.go(-1)</script>";
		}
mysql_close($con);
?>