<?php
header("content-type:text/html;charset=utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");

$name = $_GET['Cname'];
$cookie = $_COOKIE['name'];
//查询多少个

$tot = "select Cname from selection where Sname='$cookie'";
$tots = mysql_num_rows(mysql_query($tot));
if($tots<2){
	if($tots==0){
		$sele = "insert into selection(Sname,Cname) values('$cookie','$name')";
        $select = mysql_query($sele);
        echo "<script>alert('选课成功！');history.go(-1);</script>";
		}else if($tots==1){
	       $if = mysql_query("select Cname from selection where Sname='$cookie'");  // cookie 的所有课程
	       mysql_data_seek($if,0);  
	       $ifs = mysql_fetch_assoc($if);
	         if($ifs['Cname']==$name){
	           echo "<script>alert('已选该课程！');history.go(-1);</script>";
	          } else{$sele = "insert into selection(Sname,Cname) values('$cookie','$name')";
                     $select = mysql_query($sele);
                     echo "<script>alert('选课成功！');history.go(-1);</script>";}				 
		 }  
	   
}else{
	echo "<script>alert('选课超出限制！');history.go(-1);</script>";
	}



mysql_close($con);
?>