<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/student.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/student.js"></script>
</head>

<body>

<div class="container">
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation"><button class="btn btn-info checkCourse"><?php echo $_COOKIE["name"]?></button></li>
    <li role="presentation" ><button class="btn btn-warning checkCourse"><a href="#Scourse" role="tab" data-toggle="tab" style="color:#FFF;">选 课</a></button></li>
    <li role="presentation"><button class="btn btn-info checkCourse" data-toggle="modal" data-target="#Modal_1" onclick="modal1()" >选课信息</button></li>
    <!--运用模态框-->
    <li role="presentation"><button class="btn btn-success checkCourse"><a href="#Teacher" role="tab" data-toggle="tab" style="color:#FFF;">老师信息</a></button></li>
    <li role="presentation"><button class="btn btn-primary checkCourse" data-toggle="modal" data-target="#Modal_2">查询成绩</button></li>
  </ul>
    <button class="btn btn-danger checkCourse fright" onclick="unset()">注销</button>
</div>


<div class="line"></div>

<div class="tab-content" style="margin-top:20px;">
  <div class="container tab-pane active" id="Scourse" role="tabpanel"  ></div>
  <div class="container tab-pane " id="Teacher" role="tabpanel"></div>
</div><!--tab-content--> 


<div class="modal fade" id="Modal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">选课信息</h4>
      </div>
      <div class="modal-body">
        <div id="modal1"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <!--Modal_1-->






<div class="modal fade" id="Modal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">课程成绩</h4>
      </div><!--modal-header-->
      <div class="modal-body">
        <div id="grade"></div>
      </div><!--modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div><!--modal-footer-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div> <!--Modal_2-->




</body>
</html>
