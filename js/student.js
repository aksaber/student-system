 function show(url){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('Scourse').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get',url,false);  
	   xhr.send();
	   }
   window.onload = function(){
	   show("student/course.php");
	   teach();
	   grade();
	   }
	   
	   
  function modal1(){
	  var xhr = new XMLHttpRequest();
	  xhr.onreadystatechange = function(){
		  if(xhr.readyState===4){
			  document.getElementById('modal1').innerHTML = xhr.responseText;
			  }
		  }
	  xhr.open('get','student/check_course.php');
	  xhr.send();	  
	  
	  }	  
	  
	   function teach(){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('Teacher').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get','student/s_teacher.php');  
	   xhr.send();
	   } 
	   
	   
	   function grade(){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('grade').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get','student/s_grade.php');  
	   xhr.send();
	   } 
	   
	  //注销用户-删除cookie 
	  function unset(){
		  location="logoff.php";  	
		  }