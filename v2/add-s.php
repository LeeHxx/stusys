<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js h-100" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/all.css" rel="stylesheet">
  <link href="css/icon.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <script src="js/buttons.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
  //当单击登录按钮时触发的事件
  $(".btn").click(function(){
    var stuname=$("#stuname").val();
    var stuid=$("#stuid").val();
    var stuxy=$("#stuxy").val();
    var stuyear=$("#stuyear").val();
    var stuclass=$("#stuclass").val();
    var stutel=$("#stutel").val();
    var stuaddress=$("#stuaddress").val();
    var jg=$("#jg").val();
    var other=$("#other").val();
    var stusex=$("#stusex").val();
    var pattern = new RegExp("[~'!@#$%^&*()-+_=:]");
    if(stuname==""){
      alert("请输入姓名！");
      $("#stuname").focus();
      return false;
    }else if(pattern.test(stuname)){
      alert("温馨提示：名称中含有非法字符，请重新输入！");
      $("#stuname").focus();
      return false;
    }else if(stuid==""){
      alert('请输入学号!');
      $("#stuid").focus();
      return false;
    }else if(stuxy==""){
      alert('请选择学院!');
      $("#stuxy").focus();
      return false;
    }else if(stusex==""){
      alert('请选择性别!');
      $("#stusex").focus();
      return false;
    }else if(stuyear==""){
      alert('请选择入学年份!');
      $("#stuyear").focus();
      return false;
    }else if(jg==""){
      alert('请选择籍贯!');
      $("#jg").focus();
      return false;
    }else if(pattern.test(stutel)){
      alert("温馨提示：名称中含有非法字符，请重新输入！");
      $("#stutel").focus();
      return false;
    }else{
      $.post("add_stu.php",{stuid:stuid,stusex:stusex,stuyear:stuyear,stuname:stuname,stuxy:stuxy,stuclass:stuclass,stutel:stutel,stuaddress:stuaddress,jg:jg,other:other},function(data){
        if($.trim(data)=='yes'){
          
          window.location.href='add-s.php';
          return true;
        }else{
          alert('添加失败！');
          window.location.href='add.php';
          return false;
        }
      },"text");
    }
  });
});
</script>
</head>
<body class="h-100">


  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                <span class="d-none d-md-inline ml-1">学生信息管理系统</span>
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          


          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link  active" href="add.php">
                  <i class="material-icons">note_add</i>
                  <span>添加学生</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="list.php">
                  <i class="material-icons">vertical_split</i>
                  <span>学生列表</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="edit.php">
                  <i class="material-icons">edit</i>
                  <span>查询与修改</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="a.php">
                  <i class="material-icons">trending_up</i>
                  <span>学生招生情况</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="b.php">
                  <i class="material-icons">supervisor_account</i>
                  <span>生源分布情况</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <div class=" w-100      ">
               <footer class="main-footer d-flex p-2 px-3 bg-white border-top"> 
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="material-icons">perm_identity</i>
                      <span>管理员信息</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="material-icons">view_agenda</i>
                      <span>院系信息</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="material-icons">class</i>
                      <span>班级信息</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="material-icons">supervisor_account</i>
                      <span>学生信息</span>
                    </a>
                  </li>
                </ul>
              </footer>
            </div>


            <ul class="navbar-nav border-left flex-row ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle mr-2" src="images/avatars/ren.png" alt="User Avatar">
                  <span class="d-none d-md-inline-block"><?php echo $_SESSION['user'];?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item" href="#">
                    <i class="material-icons">&#xE7FD;</i>管理员</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="login.php">
                      <i class="material-icons text-danger">&#xE879;</i> 退出 </a>
                    </div>
                  </li>
                </ul>
                <nav class="nav">
                  <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                    <i class="material-icons">&#xE5D2;</i>
                  </a>
                </nav>
              </nav>
            </div>
            <!-- / .main-navbar -->
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="material-icons">done_outline</i>
            <strong>Success!</strong> 学生信息添加成功! </div>
         
            


            <div class="main-content-container container-fluid px-4">
              <!-- Page Header -->
              <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                  <span class="text-uppercase page-subtitle">Student</span>
                  <h3 class="page-title">添加学生</h3>
                </div>
              </div>

              <div class="col-lg-10">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">学生信息</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="FirstName">学生姓名</label>
                                <input type="text" class="form-control" id="stuname" placeholder="叫啥？" value="">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">学生学号</label>
                                <input type="text" class="form-control" id="stuid" placeholder="学号？"  >
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">学院</label>
                                <select id="stuxy" class="form-control">
                                  <option value="" selected>请选择...</option>
                                  <option value="信息工程学院">信息工程学院</option>
                                  <option value="会计与审计学院">会计与审计学院</option>
                                  <option value="金融与经济学院">金融与经济学院</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">性别</label>
                                <select id="stusex" class="form-control">
                                  <option value="" selected>请选择...</option>
                                  <option value="女">女</option>
                                  <option value="男">男</option>                                 
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="feInputAddress">家庭住址</label>
                              <input type="text" class="form-control" id="stuaddress" placeholder="住哪？">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fePassword">班级</label>
                                <input type="text" class="form-control" id="stuclass" placeholder="几班的？">
                              </div>
                          </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feInputCity">联系电话</label>
                                <input type="text" class="form-control" id="stutel" placeholder="1xx-xxxx-xxxx">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="feInputState">入学年份</label>
                                <select id="stuyear" class="form-control">
                                  <option value="" selected>请选择...</option>
                                  <option value="2019">2019</option>
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">籍贯</label>
                                <select id="jg" class="form-control">
                                  <option value="" selected>请选择...</option>
                                  <option value="南京市">南京市</option>
                                  <option value="徐州市">徐州市</option>
                                  <option value="无锡市">无锡市</option>
                                  <option value="苏州市">苏州市</option>
                                  <option value="淮安市">淮安市</option>
                                  <option value="运城市">运城市</option>
                                  <option value="常州市">常州市</option>
                                  <option value="宿迁市">宿迁市</option>
                                  <option value="泰州市">泰州市</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">其他</label>
                                <input type="text" class="form-control" id="other" placeholder="备注...">
                              </div>
                            </div>
                            <button type="button" class="btn btn-accent">确认添加</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>





                          </div>
                          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">

                            <span class="copyright ml-auto my-auto mr-2">Copyright © 2019    </span>
                          </footer>
                        </main>
                      </div>
                    </div>
                    <script src="js/jquery-3.3.1.min.js"></script>
                    <script src="js/popper.min.js" ></script>
                    <script src="js/bootstrap.min.js" ></script>
                    <script src="js/Chart.min.js"></script>
                    <script src="js/shards.min.js"></script>
                    <script src="js/jquery.sharrre.min.js"></script>
                    <script src="scripts/extras.1.1.0.min.js"></script>
                    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
                    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
                  </body>
                  </html>