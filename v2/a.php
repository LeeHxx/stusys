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
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.css">
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
$sql1="select * from stu where stuxy='信息工程学院' ";
$sql2="select * from stu where stuxy='会计与审计学院' ";
$sql3="select * from stu where stuxy='金融与经济学院' ";
//执行sql语
//mysqli_query($conn,$sql) or die('添加数据出错：'.mysql_error());
$result1=mysqli_query($conn,$sql1);
$num1=mysqli_num_rows($result1);
$result2=mysqli_query($conn,$sql2);
$num2=mysqli_num_rows($result2);
$result3=mysqli_query($conn,$sql3);
$num3=mysqli_num_rows($result3);
?>

<input type="hidden" class="form-control" id="num1" value="<?php echo $num1; ?>">
<input type="hidden" class="form-control" id="num2" value="<?php echo $num2; ?>">
<input type="hidden" class="form-control" id="num3" value="<?php echo $num3; ?>">
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
                <a class="nav-link  active" href="a.php">
                  <i class="material-icons">trending_up</i>
                  <span>学生招生情况</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="a.php">
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
                    <a class="dropdown-item text-danger" href="#">
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
                <span class="text-uppercase page-subtitle">student</span>
                <h3 class="page-title">学生招生情况</h3>
              </div>
            </div>
            

            <div class="row">
              <!-- Users Stats -->
              <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">学生招生走势图</h6>
                  </div>
                  <div class="card-body pt-0">
                    <div class="row border-bottom py-2 bg-light">
                      <div class="col-12 col-sm-6">
                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                          <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                          <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                          <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                        </div>
                      </div>                
                      <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                        <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
                      </div>
                    </div>
                    <canvas id="overview" height="130" style="max-width: 100% !important;" class="blog-overview-users" ></canvas>
                  </div>
                </div>
              </div>




              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small h-100">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">二级学院招生情况</h6>
                  </div>
                  <br>
                  <br>
                  <div class="card-body d-flex py-0">
                    <canvas id="chart-area" height="220"></canvas>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                          <option selected>2019年</option>
                          <option value="1">2018年</option>
                          <option value="2">2017年</option>
                          <option value="3">2016年</option>
                        </select>
                      </div>
                      <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                      </div>
                    </div>
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
      var num1=$("#num1").val();
      var num2=$("#num2").val();
      var num3=$("#num3").val();

      var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
      };

      var config = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
            num1,
            num2,
            num3,           
            ],
            backgroundColor: [
            window.chartColors.red,
            window.chartColors.orange,
            window.chartColors.yellow,
            ],
            label: 'Dataset 1'
          }],
          labels: [
          '信息工程学院',
          '会计与审计学院',        
          '金融与经济学院'
          ]
        },
        options: {
          legend: {
        position: 'bottom',
        labels: {
          padding: 25,
          boxWidth: 20
        }
      },
          responsive: true
        }
      };
      window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
      };




      var ubdData = {
        datasets: [{
          hoverBorderColor: '#ffffff',
          data: [6, 3, 5],
          backgroundColor: [
          'rgba(0,123,255,0.9)',
          'rgba(0,123,255,0.5)',
          'rgba(0,123,255,0.3)'
          ]
        }],
        labels: ["信息工程学院", "会计与审计学院", "金融与经济学院"]
      };
    // Options
    var ubdOptions = {
      legend: {
        position: 'bottom',
        labels: {
          padding: 25,
          boxWidth: 20
        }
      },
      cutoutPercentage: 0,
      // Uncomment the following line in order to disable the animations.
      // animation: false,
      tooltips: {
        custom: false,
        mode: 'index',
        position: 'nearest'
      }
    };
   // var ubdCtx = document.getElementById('chart-area').getContext('2d');
    // Generate the users by device chart.
    //window.ubdChart = new Chart(ubdCtx, {
    //  type: 'pie',
    //  data: ubdData,
   //   options: ubdOptions
  //  });



  var bouCtx = document.getElementById('overview')[0];

    // Data
    var bouData = {
      // Generate the days labels on the X axis.
      labels: Array.from(new Array(30), function (_, i) {
        return i === 0 ? 1 : i;
      }),
      datasets: [{
        label: 'Current Month',
        fill: 'start',
        data: [500, 800, 320, 180, 240, 320, 230, 650, 590, 1200, 750, 940, 1420, 1200, 960, 1450, 1820, 2800, 2102, 1920, 3920, 3202, 3140, 2800, 3200, 3200, 3400, 2910, 3100, 4250],
        backgroundColor: 'rgba(0,123,255,0.1)',
        borderColor: 'rgba(0,123,255,1)',
        pointBackgroundColor: '#ffffff',
        pointHoverBackgroundColor: 'rgb(0,123,255)',
        borderWidth: 1.5,
        pointRadius: 0,
        pointHoverRadius: 3
      }, {
        label: 'Past Month',
        fill: 'start',
        data: [380, 430, 120, 230, 410, 740, 472, 219, 391, 229, 400, 203, 301, 380, 291, 620, 700, 300, 630, 402, 320, 380, 289, 410, 300, 530, 630, 720, 780, 1200],
        backgroundColor: 'rgba(255,65,105,0.1)',
        borderColor: 'rgba(255,65,105,1)',
        pointBackgroundColor: '#ffffff',
        pointHoverBackgroundColor: 'rgba(255,65,105,1)',
        borderDash: [3, 3],
        borderWidth: 1,
        pointRadius: 0,
        pointHoverRadius: 2,
        pointBorderColor: 'rgba(255,65,105,1)'
      }]
    };

    // Options
    var bouOptions = {
      responsive: true,
      legend: {
        position: 'top'
      },
      elements: {
        line: {
          // A higher value makes the line look skewed at this ratio.
          tension: 0.3
        },
        point: {
          radius: 0
        }
      },
      scales: {
        xAxes: [{
          gridLines: false,
          ticks: {
            callback: function (tick, index) {
              // Jump every 7 values on the X axis labels to avoid clutter.
              return index % 7 !== 0 ? '' : tick;
            }
          }
        }],
        yAxes: [{
          ticks: {
            suggestedMax: 45,
            callback: function (tick, index, ticks) {
              if (tick === 0) {
                return tick;
              }
              // Format the amounts using Ks for thousands.
              return tick > 999 ? (tick/ 1000).toFixed(1) + 'K' : tick;
            }
          }
        }]
      },
      // Uncomment the next lines in order to disable the animations.
      // animation: {
      //   duration: 0
      // },
      hover: {
        mode: 'nearest',
        intersect: false
      },
      tooltips: {
        custom: false,
        mode: 'nearest',
        intersect: false
      }
    };

    // Generate the Analytics Overview chart.
    window.BlogOverviewUsers = new Chart(bouCtx, {
      type: 'LineWithLine',
      data: bouData,
      options: bouOptions
    });

    // Hide initially the first and last analytics overview chart points.
    // They can still be triggered on hover.
    var aocMeta = BlogOverviewUsers.getDatasetMeta(0);
    aocMeta.data[0]._model.radius = 0;
    aocMeta.data[bouData.datasets[0].data.length - 1]._model.radius = 0;

    // Render the chart.
    window.BlogOverviewUsers.render();

</script>

    



    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    
    <script src="js/shards.min.js"></script>
    <script src="js/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.js"></script>
    
  </body>
</html>