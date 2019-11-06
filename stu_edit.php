<?php require_once('session.php');
session_start();?>
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
		var id=$("#id").val();
		var stuid=$("#stuid").val();
		var stuname=$("#stuname").val();
		var stusex= $("input[name='stusex']:checked").val();
		var stuxy=$("#stuxy").val();
		var stuzy=$("#stuzy").val();
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
			$.post("edit_stu.php",{id:id,stuid:stuid,stuname:stuname,stusex:stusex,stuxy:stuxy,stuzy:stuzy,stuclass:stuclass,stutel:stutel,stuaddress:stuaddress},function(data){
				if($.trim(data)=='yes'){
					alert('添加成功！');
					window.location.href='stu_list.php';
					return true;
				}else{
					alert('添加失败！');
					window.location.href='stu_list.php';
					return false;
				}
			},"text");
		}
	});
});
</script>

</head>
<body>
<?php
session_start();

require_once('conn.php');

$id = $_GET['id'];

//将查询语句赋给变量$sql
$sql="select * from stu where id={$id}";
//执行sql语
//mysqli_query($conn,$sql) or die('添加数据出错：'.mysql_error());
$result=mysqli_query($conn,$sql);
$sql_arr = mysqli_fetch_assoc($result);
?>


	<div class="container">
		<h3>编辑学生</h3>
		<ul class="nav nav-tabs"></ul>
		<br>
		<form>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id" value="<?php echo $sql_arr['id']?>" readonly="readonly">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">姓名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuname" value="<?php echo $sql_arr['stuname']?>">
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
					<input type="text" class="form-control" id="stuid" value="<?php echo $sql_arr['stuid']?>">
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
					<input type="text" class="form-control" id="stuzy" value="<?php echo $sql_arr['stuzy']?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">班级</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuclass" value="<?php echo $sql_arr['stuclass']?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">联系电话</label>
				<div class="col-sm-10">
					<input type="tel" class="form-control" id="stutel" value="<?php echo $sql_arr['stutel']?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">住址</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stuaddress" value="<?php echo $sql_arr['stuaddress']?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<form action="stu_list.php">
					<button type="button" class="btn btn-primary">确认添加</button>
					<button type="submit" class="btn btn-primary">返回</button>	
				</form>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
