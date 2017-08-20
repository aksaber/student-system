<?php
header("content-type:text/html;charset=utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");

setcookie('name','');
echo "<script>location='login.html'</script>";

mysql_close($con);
?>