<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");

    $cookie = $_COOKIE['name'];
	$sql = mysql_query("select Cname,grade from grade where Sname='$cookie'");
    $sqls = mysql_fetch_assoc($sql);

    $num = mysql_num_rows($sql);
	
echo <<<Eof
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <table class="table table-striped"><tr><td>课程</td><td>成绩</td></tr>
Eof;
	
  if($num == 1){
	  echo "<tr>";
	  echo "<td>{$sqls['Cname']}</td>";
	  echo "<td>{$sqls['grade']}</td>";
	  echo "</tr>";
  }else if($num == 2){
	    echo "<td>{$sqls['Cname']}</td>";
		echo "<td>{$sqls['grade']}</td>";
	  	mysql_data_seek($sql,$num-1);
     	$sqls = mysql_fetch_assoc($sql);
		echo "<tr>";
	    echo "<td>{$sqls['Cname']}</td>";
	    echo "<td>{$sqls['grade']}</td>";
		echo "</tr>";
	  }else if($num == 0){
		  echo "<td><p>并没有成绩</p></td>";
		  }
     echo "</table>";
mysql_close($con);
?>