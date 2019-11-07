<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js h-100" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>信息管理系统</title>
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/all.css" rel="stylesheet">
  <link href="css/icon.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <script src="js/buttons.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/utils.js"></script>

</head>
<body class="h-100">



  <?php
  session_start();
  require_once('conn.php');

//将查询语句赋给变量$sql
  $sql1="select * from stu where jg='南京市' ";
  $sql2="select * from stu where jg='徐州市' ";
  $sql3="select * from stu where jg='无锡市' ";
  $sql4="select * from stu where jg='苏州市' ";
  $sql5="select * from stu where jg='淮安市' ";
  $sql6="select * from stu where jg='运城市' ";
  $sql7="select * from stu where jg='常州市' ";
  $sql8="select * from stu where jg='宿迁市' ";
  $sql9="select * from stu where jg='泰州市' ";
  
//执行sql语
//mysqli_query($conn,$sql) or die('添加数据出错：'.mysql_error());
  $result1=mysqli_query($conn,$sql1);
  $nj=mysqli_num_rows($result1);
  $result2=mysqli_query($conn,$sql2);
  $xz=mysqli_num_rows($result2);
  $result3=mysqli_query($conn,$sql3);
  $wu=mysqli_num_rows($result3);
  $result4=mysqli_query($conn,$sql4);
  $sz=mysqli_num_rows($result4);
  $result5=mysqli_query($conn,$sql5);
  $ha=mysqli_num_rows($result5);
  $result6=mysqli_query($conn,$sql6);
  $yc=mysqli_num_rows($result6);
  $result7=mysqli_query($conn,$sql7);
  $cz=mysqli_num_rows($result7);
  $result8=mysqli_query($conn,$sql8);
  $sq=mysqli_num_rows($result8);
  $result9=mysqli_query($conn,$sql9);
  $tz=mysqli_num_rows($result9);







  ?>

  <input type="hidden" class="form-control" id="nj" value="<?php echo $nj; ?>">
  <input type="hidden" class="form-control" id="xz" value="<?php echo $xz; ?>">
  <input type="hidden" class="form-control" id="wu" value="<?php echo $wu; ?>">
  <input type="hidden" class="form-control" id="sz" value="<?php echo $sz; ?>">
  <input type="hidden" class="form-control" id="ha" value="<?php echo $ha; ?>">
  <input type="hidden" class="form-control" id="yc" value="<?php echo $yc; ?>">
  <input type="hidden" class="form-control" id="cz" value="<?php echo $cz; ?>">
  <input type="hidden" class="form-control" id="sq" value="<?php echo $sq; ?>">
  <input type="hidden" class="form-control" id="tz" value="<?php echo $tz; ?>">



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
                <a class="nav-link " href="add.php">
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
                <a class="nav-link  active" href="b.php">
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
            <div class="main-content-container container-fluid px-4">
              <!-- Page Header -->
              <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                  <span class="text-uppercase page-subtitle">Student</span>
                  <h3 class="page-title">生源分布情况</h3>
                </div>
              </div>






              <div class="row">

                <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                  <div class="card card-small h-100">
                    <div class="card-header border-bottom">
                      <h6 class="m-0">二级学院招生情况</h6>
                    </div>
                    <br>
                    <br>
                    <div class="card-body d-flex pt-0">
                      <canvas id="canvas" style="display: block; width: 820px; height: 410px;" width="820" height="410" class="chartjs-render-monitor"></canvas>
                    </div> 
                  </div>
                </div>


              </div>
              </div>
              <footer class="main-footer d-flex p-2 px-3 bg-white border-top">

                <span class="copyright ml-auto my-auto mr-2">Copyright © 2019    </span>
              </footer>
            </main>
          </div>
        </div>


        <script>
    var nj=$("#nj").val();
    var xz=$("#xz").val();
    var wu=$("#wu").val();
    var sz=$("#sz").val();
    var ha=$("#ha").val();
    var yc=$("#yc").val();
    var cz=$("#cz").val();
    var sq=$("#sq").val();
    var tz=$("#tz").val();



    var color = Chart.helpers.color;
    var barChartData = {
      labels: ['南京市', '徐州市', '无锡市', '苏州市', '淮安市', '运城', '常州市', '宿迁市', '泰州市'],
      datasets: [{
        label: '人数',
        backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)","rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)"],
        borderColor:  ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)","rgb(255, 99, 132)","rgb(255, 159, 64)"],
        borderWidth: 1,
        data: [
        nj,
        xz,
        wu,
        sz,
        ha,
        yc,
        cz,
        sq,
        tz
        ]
      }]

    };

    window.onload = function() {
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          responsive: true,
          legend: {
            position: 'top',
          },
          "scales": {
            "yAxes": [{
              "ticks": {
                "beginAtZero": true
              }
            }]
          }
        }
        
      });

    };

    
  
  </script>

<script>new Chart(document.getElementById("chartjs-1"),{"type":"bar","data":{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"My First Dataset","data":[65,59,80,81,56,55,40],"fill":false,"backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});</script>




        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>

        <script src="js/shards.min.js"></script>
        <script src="js/jquery.sharrre.min.js"></script>
        <script src="scripts/extras.1.1.0.min.js"></script>
        <script src="scripts/shards-dashboards.1.1.0.min.js"></script>

      </body>
      </html>