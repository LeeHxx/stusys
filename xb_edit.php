<?php require_once('session.php');
session_start();?>
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
	
	$(".btn").click(function(){
		var id=$("#id").val();
		var zh=$("#zh").val();
		var mm=$("#mm").val();
			if (confirm("确定修改吗？")){
				$.post("edit_xb.php",{id:id,zh:zh,mm:mm},function(data){
					if($.trim(data)=='yes'){
						alert('修改成功！');
						window.location.href='xb_list.php';
						return true;
					}else{
						alert('修改失败！');
						window.location.href='xb_list.php';
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
$sql="select * from xbxxb where id={$id}";
//执行sql语

//mysqli_query($conn,$sql) or die('添加数据出错：'.mysql_error());
$result=mysqli_query($conn,$sql);
$sql_arr = mysqli_fetch_assoc($result);


//关闭数据库连接

?>
	<div class="col-xs-12 col-sm-10">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>修改系部</h3>
				<ul class="nav nav-tabs">
				</ul>
				<br>
				<br>
				<form class="form-horizontal" name="form1" action="" method="post">
					<div class="form-group">
						<div class="col-sm-4">ID
							<input type="text" class="form-control" name="id" id="id" value="<?php echo $sql_arr['id']?>" readonly="readonly"
							>
						</div>
						
						<div class="col-sm-2"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-4">系部代码
							<input type="text" class="form-control" name="zh" id="zh" value="<?php echo $sql_arr['xbid']?>"
							>
						</div>
						
						<div class="col-sm-2"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-4">系部名称
							<input type="text" class="form-control" name="mm" id="mm" value="<?php echo $sql_arr['xb']?>"
							>
						</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3">
								<button type="button" class="btn btn-success">修改</button>
							</div>
							<div class="col-sm-2"></div>
						</div>
						<div class="col-sm-2"></div>
						<br>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>
