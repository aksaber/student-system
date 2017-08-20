<?php
header("content-type:text/html;charset=utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db('y1');
mysql_query("set names utf8");
  
  $sql = "select * from teacher";
  $sqls = mysql_query($sql);


echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>

      table td{
		  text-align:center;
		  }
	  a:hover{
		  text-decoration:none;
		  }	  
	  .ins:hover{
		  color:red;
		  cursor:default;
		  }	  
    </style>

   <table class="table table-bordered table-hover"><tr><td>姓名</td><td>性别</td><td>所属课程</td><td>学工号</td></tr>
Eof;

while($row=mysql_fetch_assoc($sqls)){
	echo "<tr>";
	echo "<td class='ins'>{$row['Tname']}</td>";
	echo "<td class='ins'>{$row['Tsex']}</td>";
	echo "<td class='ins'>{$row['Tcourse']}</td>";
    echo "<td class='ins'>{$row['Tnum']}</td>";
	echo "</tr>";
	}
echo "</table>";


	
mysql_close($con);
?>