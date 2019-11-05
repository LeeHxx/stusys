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
				$.post("del_xb.php?id="+id,function(data){
					if($.trim(data)=='yes'){
						alert('删除成功！');
						window.location.href='xb_list.php';
						return true;
					}else{
						alert('删除失败！');
						window.location.href='xb_list.php';
						return false;
					}
				},"text");
			}
		}
		
	</script>
</head>
<body>
	<div class="container">
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
    </tr>
  </thead>
  
  <tbody>
    <?php
						session_start();
						require_once('conn.php');

						$sql="select * from xbxxb";
						$result=mysqli_query($conn,$sql);
						$loginNum=mysqli_num_rows($result);
						for($i=0; $i<$loginNum; $i++){
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['stuid']}</td>";
							echo "<td>{$row['xb']}</td>";
							
							
							echo "<td>
							<form action='xb_edit.php?id={$row['id']}' method='post' class='from-1'>
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

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>





	</div>













	<div class="col-xs-12 col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="col-sm-3">
					<h3>系部列表</h3>
				</div>
				<div class="col-sm-3">
					<a class="navbar-brand" href="xb_list.php">
						
						<img src="img/shuaxin.png" width="30" height="30" alt="">
					</a>
				</div>

				<div class="nav "></div>
<!--
				<ul class="nav nav-tabs">
					<!-- <li role="presentation" class="active"><a href="#">全部查询</a></li> 
				</ul>
				<br>

				<form class="form-horizontal" name="form1" action="gly_find.php?findid=findid">
					<div class="form-group">
						<div class="col-sm-4">
							<input type="text" class="form-control" name="findid"
							placeholder="请输入ID查找">
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-default">查询</button>
						</div>
						<div class=" col-sm-2"></div>
					</div>
				</form> -->
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>系部代码</th>
							<th>系部名称</th>													
							<th colspan="2"></th>
						</tr>
					</thead>
					<tbody>

						
						<?php
						session_start();
						require_once('conn.php');

						$sql="select * from xbxxb";
						$result=mysqli_query($conn,$sql);
						$loginNum=mysqli_num_rows($result);
						for($i=0; $i<$loginNum; $i++){
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['xbid']}</td>";
							echo "<td>{$row['xb']}</td>";
							
							
							echo "<td>
							<form action='xb_edit.php?id={$row['id']}' method='post' class='from-1'>
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
		</div>
	</div>
</body>
</html>