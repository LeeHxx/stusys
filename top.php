<?php require_once('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生基本信息管理系统</title>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="js/logout.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".bclass").click(function(){
		$(this).next().slideToggle("fast");
	});
});
</script>
<style type="text/css">
* {
	margin: 0px;
	padding: 0px;
}
a {
	text-decoration: none;
	color: #FFF;
}
body {
	background: #159BDB;
	font-family: sans-serif;
}
h1 {
	text-align: center;
	color: #1284BA;
}
.main {
	min-height: 100px;
	height: 200px;
	background: #ffffff;
	padding-top: 10px;
	padding-bottom: 20px;
}
.main .cattitle {
	height: 40px;
	text-align: center;
	line-height: 40px;
	width: 95%;
	color: #FFF;
	font-weight: bold;
	margin: 0 auto;
	background: #1284BA;
}
.main .menu {
	width: 95%;
	margin: 0 auto;
}
.main .menu .bclass {
	height: 28px;
	line-height: 28px;
	color: #FFF;
	font-weight: 500;
	padding-left: 40px;
	font-size: 14px;
	background: url(images/row-r.png) 20px center no-repeat;
	cursor: default;
}
.main .menu .sclass {
	display: none;
}
.main .menu .sclass a {
	display: block;
	height: 26px;
	line-height: 26px;
	padding-left: 40px;
	font-size: 14px;
	background:url(images/row-d.png) 30px center no-repeat;
}
.main .menu .sclass a:hover {
	background:#1284BA url(images/row-dh.png) 30px center no-repeat;
}
</style>
</head>
<body>
<div class="main">
	<h1>南京审计大学金审学院学生管理系统</h1>
  	<?php echo $_SESSION['role'];?>
  	
</div>
</body>
</html>
