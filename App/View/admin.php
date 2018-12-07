<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title><?= $title . ' - ' . $subtitle ?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'/>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
  <!-- CSS Files -->
  <link href="../App/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="../App/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet"/>
  <link rel="stylesheet" href="../App/assets/css/elegant-icons.css"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../App/assets/css/demo.css" rel="stylesheet"/>
  <style>
    .form-control {
      height: unset;
    }

    th.title {
      min-width: 300px;
    }
  </style>
</head>

<body>
<div class="wrapper">
  <div class="sidebar" data-image="../App/assets/img/sidebar-5.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
          <?= $title ?>
        </a>
      </div>
      <ul class="nav">
        <!--        <li>
                  <a class="nav-link" href="dashboard.html">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="./user.html">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>User Profile</p>
                  </a>
                </li>-->
        <li class="nav-item active">
          <a class="nav-link" href="/">
            <i class="nc-icon nc-notes"></i>
            <p><?= $subtitle ?></p>
          </a>
        </li>
        <!-- <li>
           <a class="nav-link" href="./typography.html">
             <i class="nc-icon nc-paper-2"></i>
             <p>Typography</p>
           </a>
         </li>
         <li>
           <a class="nav-link" href="./icons.html">
             <i class="nc-icon nc-atom"></i>
             <p>Icons</p>
           </a>
         </li>
         <li>
           <a class="nav-link" href="./maps.html">
             <i class="nc-icon nc-pin-3"></i>
             <p>Maps</p>
           </a>
         </li>
         <li>
           <a class="nav-link" href="./notifications.html">
             <i class="nc-icon nc-bell-55"></i>
             <p>Notifications</p>
           </a>
         </li>-->
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
      <div class=" container-fluid  ">
        <a class="navbar-brand" href="#pablo"><?= $subtitle ?> </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar burger-lines"></span>
          <span class="navbar-toggler-bar burger-lines"></span>
          <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <!--     <ul class="nav navbar-nav mr-auto">
                 <li class="nav-item">
                   <a href="#" class="nav-link" data-toggle="dropdown">
                     <i class="nc-icon nc-palette"></i>
                     <span class="d-lg-none">Dashboard</span>
                   </a>
                 </li>
                 <li class="dropdown nav-item">
                   <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                     <i class="nc-icon nc-planet"></i>
                     <span class="notification">5</span>
                     <span class="d-lg-none">Notification</span>
                   </a>
                   <ul class="dropdown-menu">
                     <a class="dropdown-item" href="#">Notification 1</a>
                     <a class="dropdown-item" href="#">Notification 2</a>
                     <a class="dropdown-item" href="#">Notification 3</a>
                     <a class="dropdown-item" href="#">Notification 4</a>
                     <a class="dropdown-item" href="#">Another notification</a>
                   </ul>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="nav-link">
                     <i class="nc-icon nc-zoom-split"></i>
                     <span class="d-lg-block">&nbsp;Search</span>
                   </a>
                 </li>
               </ul>-->
          <ul class="navbar-nav ml-auto">
            <!--    <li class="nav-item">
                  <a class="nav-link" href="#pablo">
                    <span class="no-icon">Account</span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="no-icon">Dropdown</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>-->
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <span class="no-icon">Log out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-plain table-plain-bg">
              <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="card-title">Статьи</h4>
                  <p class="card-category">Статьи на сайте</p>
                </div>
                <div>
                  <a href="admin.php?add" class="btn btn-primary" data-toggle="modal" data-target="#add-new">Добавить
                    новую</a>
                </div>
              </div>
              <div class="card-body table-full-width table-responsive">
                <table class="table table-hover">
                  <thead>
                  <?php
                  $columns = ['' => ''] + $columns;
                  foreach ($columns as $column => $null) {
                    echo '<th class="' . $column . '">' . $column . '</th>';
                  } ?>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($articles as $article) {
                    $html = '<tr>';
                    $html .= '
                    <td><div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span aria-hidden="true" class="icon_pencil"></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="admin.php">Редактировать</a>
                          <a class="dropdown-item" href="#">Удалить</a>
                          <a class="dropdown-item" href="#">Дублировать</a>
                        </div>
                      </div>
                    </td>';

                    $article = array_reverse((array)$article);
                    foreach ((array)$article as $key => $value) {
                      $html = $key == 'thumbnail' ? $html . '<td><img src=" ' . $value . ' " height="40"></td>' : $html . '<td>' . $value . '</td>';
                    }
                    $html .= '</tr>';
                    echo $html;
                  } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav>
          <!--          <ul class="footer-menu">
                      <li>
                        <a href="#">
                          Home
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Company
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Blog
                        </a>
                      </li>
                    </ul>-->
          <p class="copyright text-center">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>
            Aleksey Tikhomirov
          </p>
        </nav>
      </div>
    </footer>
  </div>
</div>


<!-- Modal Add New-->
<div class="modal fade" id="add-new" tabindex="-1" role="dialog" aria-labelledby="add-new" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Добавить новую статью</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Название">
          </div>
          <div class="form-group">
            <label for="img">Url изображения</label>
            <input id="img" class="form-control" type="text" placeholder="Изображение">
          </div>
          <div class="form-group">
            <label for="content">Содержание</label>
            <textarea class="form-control" id="content" rows="5"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>-->
        <button type="button" class="btn btn-primary">Добавить</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Action -->
<div class="modal fade modal-mini modal-primary" id="action" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="modal-profile">
          <i class="nc-icon nc-bulb-63"></i>
        </div>
      </div>
      <div class="modal-body text-center">
        <p>Always have an access to your profile</p>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-link btn-simple">Back</button>-->
        <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">ОК</button>
      </div>
    </div>
  </div>
</div>
<!--  End Modal -->


</body>
<!--   Core JS Files   -->
<script src="../App/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../App/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../App/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../App/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../App/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../App/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../App/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../App/assets/js/demo.js"></script>

</html>

