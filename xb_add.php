<?php require_once('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>学生基本信息管理系统</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="js/logout.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	//当单击登录按钮时触发的事件
	$(".btn").click(function(){
		var user=$("#xyid").val();
		var passwd=$("#xy").val();
		
		var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
		if(user==""){
			alert("请输入系部代码！");
			$("#zh").focus();
			return false;
		}else if(pattern.test(user)){
			alert("温馨提示：名称中含有非法字符，请重新输入！");
			$("#zh").focus();
			return false;
		}else if(passwd==""){
			alert('请输入系部名称!');
			$("#mm").focus();
			return false;
		}else if(pattern.test(passwd)){
			alert("温馨提示：名称中含有非法字符，请重新输入！");
			$("#mm").focus();
			return false;
		}else{
			$.post("add_xb.php",{zh:user,mm:passwd},function(data){
				if($.trim(data)=='yes'){
					alert('添加成功！');
					window.location.href='xb_add.php';
					return true;
				}else{
					alert('添加失败！');
					window.location.href='xb_add.php';
					return false;
				}
			},"text");
		}
	});
});
</script>

</head>
<body>
	<div class="col-xs-12 col-sm-12">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>添加系部</h3>
				<ul class="nav nav-tabs">
				</ul>
				<br>
				<br>
				<form class="form-horizontal" name="form1" action="">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">代码</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="xyid" id="xyid"
							placeholder="请输入系部代码">
						</div>
						
						<div class="col-sm-2"></div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">名称</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="xy" id="xy"
							placeholder="请输入系部名称">
						</div>
					</div>
					<!--<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">权限</label>
						<div class="col-sm-4">
							<select class="form-control" name="gly" id="gly">
								<option value="0">管理员用户</option>
								<option value="1">普通用户</option>								
							</select>
						</div>
					</div>-->
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-success">添&nbsp加</button>
						</div>
						<div class="col-sm-2"></div>
					</div>
					<div class="col-sm-2"></div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
