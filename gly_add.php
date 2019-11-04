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
		var user=$("#zh").val();
		var passwd=$("#mm").val();
		var gly=$("#gly").val();
		var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
		if(user==""){
			alert("请输入账号！");
			$("#zh").focus();
			return false;
		}else if(pattern.test(user)){
			alert("温馨提示：用户名中含有非法字符，请重新输入！");
			$("#zh").focus();
			return false;
		}else if(passwd==""){
			alert('请输入密码!');
			$("#mm").focus();
			return false;
		}else if(pattern.test(passwd)){
			alert("温馨提示：密码中含有非法字符，请重新输入！");
			$("#mm").focus();
			return false;
		}else{
			$.post("add_gly.php",{zh:user,mm:passwd,js:gly},function(data){
				if($.trim(data)=='yes'){
					alert('添加成功！');
					window.location.href='gly_add.php';
					return true;
				}else{
					alert('添加失败！');
					window.location.href='gly_add.php';
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
				<div class="col-sm-3">
					<h3>添加管理员</h3>
				</div>
				<ul class="nav nav-tabs">
				</ul>
				<br>
				<br>
				<form class="form-horizontal" name="form1" action="">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">账号</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="zh" id="zh"
							placeholder="请输入账号">
						</div>
						
						<div class="col-sm-2"></div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="mm" id="mm"
							placeholder="请输入密码">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">权限</label>
						<div class="col-sm-4">
							<select class="form-control" name="gly" id="gly">
								<option value="0">管理员用户</option>
								<option value="1">普通用户</option>								
							</select>
						</div>
					</div>
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
