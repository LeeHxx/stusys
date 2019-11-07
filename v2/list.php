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
                <a class="nav-link " href="add.php">
                  <i class="material-icons">note_add</i>
                  <span>添加学生</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active" href="list.php">
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
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Student</span>
                <h3 class="page-title">学生列表</h3>
              </div>
            </div>
    





            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">所有学生</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">姓名</th>
                          <th scope="col" class="border-0">班级</th>
                          <th scope="col" class="border-0">学号</th>
                          <th scope="col" class="border-0">学院</th>
                          <th scope="col" class="border-0">籍贯</th>
                          <th scope="col" class="border-0">电话</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
      
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
          echo "<td>{$row['stuxy']}</td>";
          echo "<td>{$row['jg']}</td>"; 
          echo "<td>{$row['stutel']}</td>";                  
          echo "</tr>";
        }               
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
                      </tbody>
                    </table>
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