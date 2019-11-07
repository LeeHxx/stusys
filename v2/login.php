
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>登录</title>	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory 
	<link rel="shortcut icon" href="favicon.ico">-->
	<link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="css1/animate.css">
	<link rel="stylesheet" href="css1/style.css">
	<!-- Modernizr JS -->
	<script src="js1/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
	//当单击登录按钮时触发的事件
	$(".btn").click(function(){
		// 获账号文本域的值
		var user=$("#user").val();
		//获取密码文本域的值
		var passwd=$("#passwd").val();
		//定义正则表达式对象
		var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
		//对账号和密码进行非空判断  
		if(user==""){
			alert("请输入账号！");
			$("#user").focus();
			return false;
		}else if(pattern.test(user)){
			alert("温馨提示：用户名中含有非法字符，请重新输入！");
            $("#user").focus();
            return false;
		}else if(passwd==""){
			alert('请输入密码!');
			$("#passwd").focus();
			return false;
		}else if(pattern.test(passwd)){
			alert("温馨提示：密码中含有非法字符，请重新输入！");
            $("#passwd").focus();
            return false;
		}else{
			$.post("login_check.php",{user:user,passwd:passwd},function(data){
				if($.trim(data)=='yes'){
					alert('登录成功！');
					window.location.href='add.php';
					return true;
				}else{
					alert('你输入的账号或密码不正确！');
					window.location.href='login.php';
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
			<div class="row">
				<div class="col-md-4 col-md-offset-4">					
					<!-- Start Sign In Form -->
					<form action="#" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>登录</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="user" name="user" placeholder="用户名" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="passwd" name="passwd" placeholder="密码" autocomplete="off">
						</div>
						
						<div class="form-group">
							<input type="button" value="登录" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->

				</div>
			</div>
			
		</div>
	
	<!-- jQuery -->
	<script src="js1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js1/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="js1/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="js1/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js1/main.js"></script>

	</body>
</html>

