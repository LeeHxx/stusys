<?php require_once('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>学生基本信息管理系统</title>
	<link rel="stylesheet" href="css4/bootstrap.css">

	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="js/logout.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	//当单击登录按钮时触发的事件
	$(".btn").click(function(){
		var stuid=$("#stuid").val();
		var stuname=$("#stuname").val();
		var stusex= $("input[name='stusex']:checked").val();
		var stuxy=$("#stuxy").val();
		var stuzy=$("#stuzy").val();
		var stuyear=$("#stuyear").val();
		var stuclass=$("#stuclass").val();
		var stutel=$("#stutel").val();
		var stuaddress=$("#stuaddress").val();
		
		var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
		if(stuid==""){
			alert("请输入学号！");
			$("#stuid").focus();
			return false;
		}else if(pattern.test(stuname)){
			alert("温馨提示：名称中含有非法字符，请重新输入！");
			$("#stuname").focus();
			return false;
		}else if(stuname==""){
			alert('请输入姓名!');
			$("#stuname").focus();
			return false;
		}else if(pattern.test(stutel)){
			alert("温馨提示：名称中含有非法字符，请重新输入！");
			$("#stutel").focus();
			return false;
		}else{
			$.post("add_stu.php",{stuid:stuid,stuyear:stuyear,stuname:stuname,stusex:stusex,stuxy:stuxy,stuzy:stuzy,stuclass:stuclass,stutel:stutel,stuaddress:stuaddress},function(data){
				if($.trim(data)=='yes'){
					alert('添加成功！');
					window.location.href='stu_add.php';
					return true;
				}else{
					alert('添加失败！');
					window.location.href='stu_add.php';
					return false;
				}
			},"text");
		}
	});
});
</script>

</head>
<body>



	<div class="container">
		<h3>添加学生</h3>
		<ul class="nav nav-tabs"></ul>
		<br>
		<form>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">姓名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuname" placeholder="学生姓名">
				</div>
			</div>
			<fieldset class="form-group">
				<div class="row">

					<legend class="col-form-label col-sm-2 pt-0">性别</legend>
					<div class="col-sm-10">
						<form>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="stusex" value="男" >
								<label class="form-check-label" for="gridRadios1">
									男
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="stusex" value="女">
								<label class="form-check-label" for="gridRadios2">
									女
								</label>
							</div>
						</form>
					</div>    
				</div>
			</fieldset>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">学号</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuid" placeholder="学生学号">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">入学年份</label>
				<div class="col-sm-10">
					<select class="form-control" id="stuyear">
						<option value="">请选择...</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">学院</label>
				<div class="col-sm-10">
					<select class="form-control" id="stuxy">
						<option value="">请选择...</option>
						<option value="信息工程学院">信息工程学院</option>
						<option value="会计与审计学院">会计与审计学院</option>
						<option value="金融与经济学院">金融与经济学院</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">专业</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuzy" placeholder="所在专业">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">班级</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuclass" placeholder="所在班级">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">联系电话</label>
				<div class="col-sm-10">
					<input type="tel" class="form-control" id="stutel" placeholder="联系电话">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">住址</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuaddress" placeholder="所在住址">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>确认添加</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
