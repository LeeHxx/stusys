<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>Bootstrap 101 Template</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript">
    $(document).ready(function(){
      $(".bclass").click(function(){
        $(this).next().slideToggle("fast");
      });
    });
  </script>

</head>
<body>
<ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>


    -webkit-tap-highlight-color: rgba(0,0,0,0);
font-size: 14px;
line-height: 1.42857143;
color: #333;
font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", sans-serif;
box-sizing: border-box;
margin-top: 0;
padding-left: 0;
list-style: none;
max-width: 300px;
margin-bottom: 0;


<div class="main">
  <div class="cattitle">系统菜单</div>
  <div class="menu">
    <div class="bclass">
          <a href="right.php" target="right">首页</a>
        </div>
  </div>
    <?php if($_SESSION['js']=='0'){
      ?>
  <div class="menu">
    <div class="bclass">管理员信息维护</div>
    <div class="sclass"> 
          <a href="gly_add.php" target="right">添加管理员</a> 
            <a href="gly_list.php" target="right">管理员列表</a> 
        </div>
  </div>
    <?php }?>
  <div class="menu">
      <div class="bclass">学院信息维护</div>
      <div class="sclass">
          <a href="xy_add.php" target="right">添加学院</a> 
            <a href="xy_list.php" target="right">学院列表</a> 
        </div>
    </div>
    <div class="menu">
      <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
    <div class="bclass">系部信息维护</div>
      <div class="sclass"> 
          <a href="xb_add.php" target="right">添加系部</a> 
            <a href="xb_list.php" target="right">系部列表</a>
         </div>
    </div>
    <div class="menu">
      <div class="bclass">专业信息维护</div>
      <div class="sclass"> 
          <a href="zy_add.php" target="right">添加专业</a> 
            <a href="zy_list.php" target="right">专业列表</a>
        </div>
    </div>
    <div class="menu">
      <div class="bclass">班级信息维护</div>
      <div class="sclass"> 
          <a href="bj_add.php" target="right">添加班级</a> 
            <a href="bj_list.php" target="right">班级列表</a>
        </div>
    </div>
    <div class="menu">
      <div class="bclass">学生信息维护</div>
      <div class="sclass"> 
          <a href="xs_add.php" target="right">添加学生</a>
            <a href="xs_list.php" target="right">学生列表</a> 
        </div>
    </div>
  <div class="menu">
    <div class="bclass">学生信息统计</div>
      <div class="sclass"> 
          <a href="tj_xx.php" target="right">学校招生走势图</a> 
            <a href="tj_xy.php" target="right">二级学院招生情况</a> 
            <a href="tj_syd.php" target="right">生源分布情况</a> 
        </div>
    </div>
    <div class="menu">
      <div class="bclass">
          <a href="" id="logout">退出</a>
        </div>
    </div>
</div>

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
      <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
      <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>-->
    </body>
    </html>