<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>questionmanage</title>
</head>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>
<link rel="stylesheet" href="../assets/css/public.css"/>
<link rel="stylesheet" href="../assets/css/M-style.css"/>

<!--
	作者：彭均莹
    任务：管理员-题型管理界面
    开发时间：2015/11/19 
    修改时间：2015/11/23
-->
<body>
<?php
	include("../commonfile/dbconnect.php");
	include("../function/pageControl.php");
	session_start();
	
	//控制页面 没有登录系统时跳转到登录页
	if(!isset($_SESSION["userName"])){
		pageChange("请先登录系统！",2,"../login.php");
		die();
	}
	?>
<!-- ******************** head ********************* -->
<?php include("../commonfile/c-head.php");?>

<!-- ******************** main ********************* -->
<div id="g-bodybox">
	
    <!--------------- leftbar ------------------->
    <div id="g-leftbar">
		<?php include("M-ques-leftbar.php");  ?>
    </div>
    <!--------------- rightbar ------------------->
    <div id="g-rightbar">
       <?php include("M-ques-rightbar.php");  ?>
    </div>

</div>

<!-- ******************** foot ********************* -->
<?php include("../commonfile/c-foot.php");?>
<div class="clr"></div> 

</body>
</html>
