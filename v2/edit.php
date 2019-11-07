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
                <a class="nav-link " href="list.php">
                  <i class="material-icons">vertical_split</i>
                  <span>学生列表</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active" href="edit.php">
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
                  <h3 class="page-title">查询与修改</h3>
                </div>
              </div>






              <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">查询</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-3">
                      <form action="edit-s.php?findid=findid">
                        <!-- Button Groups 
                        <strong class="text-muted d-block mb-2">Button Groups</strong>
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                          <label class="btn btn-white active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Fizz </label>
                          <label class="btn btn-white">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Buzz </label>
                          <label class="btn btn-white">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Foo </label>
                          <label class="btn btn-white">
                            <input type="radio" name="options" id="option4" autocomplete="off"> Bar </label>
                        </div>
                        <!-- / Button Groups -->
                        <!-- Input Groups 
                        <strong class="text-muted d-block mb-2">Input Groups</strong>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2" value="contact">
                          <div class="input-group-append">
                            <span class="input-group-text">@designrevision.com</span>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="1000">
                          <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                        <!-- Input Groups -->
                        <!-- Seamless Input Groups 
                        <strong class="text-muted d-block mb-2">按条件查询</strong>
                        <div class="input-group mb-3">
                          <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" placeholder="Username" value="design.revision">
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group input-group-seamless">
                            <input type="password" class="form-control" id="form2-password" placeholder="Password" value="mySuperSecretPa$$word">
                            <span class="input-group-append">
                              <span class="input-group-text">
                                <i class="material-icons">lock</i>
                              </span>
                            </span>
                          </div>
                        </div>
                        <!-- / Seamless Input Groups -->
                        <!-- Input/Button Group -->
                        <br>
                        <div class="input-group mb-3">
                          <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>

                          <input type="text" class="form-control" name="findid" placeholder="输入学号查找学生" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">

                            <button class="btn btn-white" type="submit"><i class="material-icons">search</i>&nbsp;&nbsp;查询</button>
                          </div>
                        </div>
                        <!-- / Input/Button Group -->
                        <!-- Input/Button Group 
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-white" type="button">Button</button>
                          </div>
                          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> </div>
                        <!-- / Input/Button Group -->
                      </form>
                    </li>
                  </ul>
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