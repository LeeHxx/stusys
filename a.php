<?php
require_once('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>学生信息管理系统</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css4/bootstrap.css">

  <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>

</head>
<body>

  <div class="row1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#">学生信息管理系统</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav">

          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#gly">管理员信息</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#yx">院系信息<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#">专业班级信息</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#stu">学生信息</a>
          </li>
        </ul>
        




        <ul class="navbar-nav mr-auto nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              用户
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"><?php echo "用户名:"; echo $_SESSION['user'];?> </a>
              <a class="dropdown-item" href="#"><?php if ($_SESSION['js']=="0") {echo "管理员";}else{echo "普通用户";}?> </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="login.php">退出登录</a>
            </div>
          </li>
        </ul>




        <form class="form-inline my-2 my-lg-0" action="login.php">

          <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->

          <button class="btn btn-sm btn-outline-light my-2 my-sm-0" type="button"><?php
          echo "登录用户：";
          echo $_SESSION['user'];
//echo $_SESSION['js'];
          ?></button>

          <button class="btn btn-sm btn-outline-light my-2 my-sm-0" type="submit" href="login.php">退出</button>

        </form>

      </div>
    </nav>
    <br><br><br><br>


    <div class="tab-content">

      <div class="tab-pane fade active show">
        <div class="container">
          <div class="jumbotron">
            <h1 class="display-4">欢迎!</h1>
            <p class="lead">欢迎进入学生信息管理系统</p>
            <hr class="my-4">
            <p>点击下一步进入学生管理模块.</p>
            <a class="btn btn-primary btn-lg" href="#stu" data-toggle="pill" role="button">下一步</a>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="gly">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">添加管理员</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">管理员列表</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <iframe width="800" height="700" frameborder="0" src="gly_add.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <iframe width="800" height="700" frameborder="0" src="gly_list.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="tab-pane fade" id="yx">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#xyadd" role="tab" aria-controls="v-pills-home" aria-selected="false">添加学院</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#xylist" role="tab" aria-controls="v-pills-profile" aria-selected="false">学院列表</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">添加系部</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">系部列表</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade active show" id="xyadd" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <iframe width="800" height="600" frameborder="0" src="xy_add.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade" id="xylist" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <iframe width="800" height="600" frameborder="0" src="xy_list.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <iframe width="800" height="600" frameborder="0" src="xb_add.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <iframe width="800" height="600" frameborder="0" src="xb_list.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="tab-pane fade" id="stu">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#stu-add" role="tab" aria-controls="v-pills-home" aria-selected="false">添加学生</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#stu-list" role="tab" aria-controls="v-pills-profile" aria-selected="false">学生列表</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#stu-img" role="tab" aria-controls="v-pills-messages" aria-selected="true">学校招生走势图</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#stu-second" role="tab" aria-controls="v-pills-settings" aria-selected="false">二级学院招生情况</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#stu-address" role="tab" aria-controls="v-pills-settings" aria-selected="false">生源分布情况</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade active show" id="stu-add" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <iframe width="800" height="600" frameborder="0" src="stu_add.php" name="right" scrolling="yes" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade" id="stu-list" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <iframe width="900" height="600" frameborder="0" src="stu_list.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade " id="stu-img" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <iframe width="800" height="600" frameborder="0" src="xb_add.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade" id="stu-second" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <iframe width="800" height="600" frameborder="0" src="xb_list.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
                <div class="tab-pane fade" id="stu-address" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <iframe width="800" height="600" frameborder="0" src="xb_list.php" name="right" scrolling="auto" noresize="noresize"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




    </div>
  </div>
  <script src="js4/bootstrap.min.js"></script>
  <script src="js4/bootstrap.bundle.js"></script>

  <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
      <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
      <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>-->
    </body>
    </html>