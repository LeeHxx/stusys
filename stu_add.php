<?php require_once('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>学生基本信息管理系统</title>
	<link rel="stylesheet" href="css4/bootstrap.min.css">

	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="js/logout.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	//当单击登录按钮时触发的事件
	$(".btn").click(function(){
		var user=$("#xyid").val();
		var passwd=$("#xy").val();
		var user=$("#xyid").val();
		var user=$("#xyid").val();
		var user=$("#xyid").val();
		var user=$("#xyid").val();
		
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
			$.post("add_stu.php",{zh:user,mm:passwd},function(data){
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
      <input type="text" class="form-control" id="inputEmail3" placeholder="学生姓名">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">性别</legend>
      <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="男" checked>
          <label class="form-check-label" for="gridRadios1">
            男
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="女">
          <label class="form-check-label" for="gridRadios2">
            女
          </label>
        </div>
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
      <button type="submit" class="btn btn-primary">确认添加</button>
    </div>
  </div>
</form>
</div>

<br>
<br>
<br>
<br>
<br>








	<div class="container">
	<form>
  <div class="form-row">
    <div class="form-group col-6">
      <label for="inputEmail4">姓名</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="学生姓名">
    </div>




<div class="form-group col-6">
    <label for="inputEmail4"></label>
<div class="col-sm-10"></div>

<div class="col-sm-6">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="男" checked>
  <label class="form-check-label" for="exampleRadios1">
    男
  </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="女">
  <label class="form-check-label" for="exampleRadios2">
    女
  </label>
</div>
</div>
</div>

</div>

<div class="form-row">
    <div class="form-group col-6">
      <label for="inputPassword4">学号</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="学号">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-6">
      <label for="inputEmail4">班级</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="学生班级">
    </div>
    <div class="form-group col-6">
      <label for="inputPassword4">专业</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="学生专业">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">家庭住址</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="button" class="btn btn-primary">Sign in</button>
</form>

</div>

<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-success">添&nbsp加</button>
						</div>
						<div class="col-sm-2"></div>
					</div>


	<div class="col-xs-12 col-sm-12">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>添加学生</h3>
				<ul class="nav nav-tabs">
				</ul>
				<br>
				<br>
				<form class="form-horizontal" name="form1" action="">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="stuname" id="stuname"
							placeholder="请输入学生姓名">
						</div>
						
						<div class="col-sm-2"></div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"></label>
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
