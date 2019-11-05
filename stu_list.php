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
		function del (id) {
			if (confirm("确定删除吗？")){
				$.post("del_stu.php?id="+id,function(data){
					if($.trim(data)=='yes'){
						alert('删除成功！');
						window.location.href='stu_list.php';
						return true;
					}else{
						alert('删除失败！');
						window.location.href='stu_list.php';
						return false;
					}
				},"text");
			}
		}
		
	</script>
</head>
<body>
	<div class="">
		<h3>学生列表</h3>
		<ul class="nav nav-tabs"></ul>
		<br>

		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">姓名</th>
					<th scope="col">班级</th>
					<th scope="col">学号</th>
					<th scope="col">专业</th>
					<th scope="col">电话</th>
					<th scope="col" colspan="2"></th>
				</tr>
			</thead>

			<tbody>
				<?php
				session_start();
				require_once('conn.php');

				$sql="select * from stu";
				$result=mysqli_query($conn,$sql);
				$loginNum=mysqli_num_rows($result);
				for($i=0; $i<$loginNum; $i++){
					$row = mysqli_fetch_assoc($result);
					echo "<tr>";
					echo "<th scope='row'>{$row['id']}</th>";
					echo "<td>{$row['stuname']}</td>";
					echo "<td>{$row['stuclass']}</td>";
					echo "<td>{$row['stuid']}</td>";
					echo "<td>{$row['stuzy']}</td>";
					echo "<td>{$row['stutel']}</td>";
					echo "<td>
					<form action='stu_edit.php?id={$row['id']}' method='post' class='from-1'>
					<button type='submit' class='btn btn-primary'>编辑</button>
					</form>
					</td>";
					echo "<td>
					<form action='javascript:del({$row['id']})' method='post'>
					<button type='submit' class='btn btn-danger'>删除</button>
					</form>
					</td>";
					echo "</tr>";
				}
                    //echo "<td>
                    //        <a href='javascript:del({$row['id']})'>删除</a>
                    //        <a href='editnews.php?id={$row['id']}'>修改</a>                           
                    //      </td>";
				mysqli_free_result($result);
				mysqli_close($conn);
				?>
			</tbody>
		</table>
	</div>	
</body>
</html>