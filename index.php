<?php

function tasksNumber($tasks, $projectName) {
  $count = 0;

  foreach ($tasks as $task) {
    if ($task['category'] === $projectName) {
      $count++;
    }
  }

  return $count;
}

$status = [
    'backlog',
    'to-do',
    'in-progress',
    'done'
];

$project = [
    "Вхідні",
    "Навчання",
    "Робота",
    "Домашні справи",
    "Авто"
];

$tasksList = [
    [
        'name' => 'Співбесіда в ІТ компанії',
        'date' => '01.07.2023',
        'category' => $project[2],
        'status' => $status[0]
    ],
    [
        'name' => 'Виконати тестове завдання',
        'date' => '25.07.2023',
        'category' => $project[2],
        'status' => $status[0]
    ],
    [
        'name' => 'Зробити завдання до першого уроку',
        'date' => '27.04.2023',
        'category' => $project[1],
        'status' => $status[3]
    ],
    [
        'name' => 'Зустрітись з друзями',
        'date' => '14.05.2023',
        'category' => $project[0],
        'status' => $status[1]
    ],
    [
        'name' => 'Купити корм для кота',
        'date' => null,
        'category' => $project[3],
        'status' => $status[2]
    ],
    [
        'name' => 'Замовити піцу',
        'date' => null,
        'category' => $project[3],
        'status' => $status[1]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Завдання та проекти | Дошка</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="static/plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="static/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="static/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- custom kanban styles -->
  <link rel="stylesheet" href="static/css/kanban.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Дошка</a>
        </li>
        <li class="nav-item bg-primary d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Створити задачу</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="static/img/logo.png" alt="Логотип Завдання та проекти" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Завдання та проекти</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="static/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Володимир</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php foreach ($project as $item): ?>
            <li class="nav-item">
              <a href="index.php" class="nav-link active">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  <?php echo $item; ?>
                  <span class="badge badge-info right"><?php echo tasksNumber($tasksList, $item); ?></span>
                </p>
              </a>
            </li>
            <?php endforeach; ?>
            <li class="nav-item">
              <a href="index.php" class="nav-link bg-olive">
                <i class="nav-icon fas fa-plus"></i>
                <p>
                  Додати проект
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper kanban">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1>Назва проекту</h1>
            </div>
            <div class="col-sm-6 d-none d-sm-block">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Назва проекту</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <div class="row">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <a type="button" href="#" class="btn btn-secondary active">Усі завдання</a>
                  <a type="button" href="#" class="btn btn-default">Порядок денний</a>
                  <a type="button" href="#" class="btn btn-default">Завтра</a>
                  <a type="button" href="#" class="btn btn-default">Прострочені</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="content pb-3">
        <div class="container-fluid h-100">
          <div class="card card-row card-secondary">
            <div class="card-header">
              <h3 class="card-title">
                Беклог
              </h3>
            </div>
            <div class="card-body connectedSortable" data-status="backlog">
              <?php
                  foreach ($tasksList as $task) {
                    if ($task['status'] == 'backlog') {
                      include('pages/components/task.html');
                    }
                  }
              ?>
            </div>
          </div>
          <div class="card card-row card-primary">
            <div class="card-header">
              <h3 class="card-title">
                Зробити
              </h3>
            </div>
            <div class="card-body connectedSortable" data-status="to-do">
              <?php
                foreach ($tasksList as $task) {
                    if ($task['status'] == 'to-do') {
                      include('pages/components/task.html');
                    }
                }
              ?>
            </div>
          </div>
          <div class="card card-row card-default">
            <div class="card-header bg-info">
              <h3 class="card-title">
                В процесі
              </h3>
            </div>
            <div class="card-body connectedSortable" data-status="in-progress">
              <?php
                foreach ($tasksList as $task) {
                  if ($task['status'] == 'in-progress') {
                    include('pages/components/task.html');
                  }
                }
              ?>
            </div>
          </div>
          <div class="card card-row card-success">
            <div class="card-header">
              <h3 class="card-title">
                Готово
              </h3>
            </div>
            <div class="card-body connectedSortable" data-status="done">
              <?php
                foreach ($tasksList as $task) {
                  if ($task['status'] == 'done') {
                    include('pages/components/task.html');
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.1.0
      </div>
      <strong>Copyright &copy; 2023 <a href="https://ithillel.ua/">Комп'ютерна школа Hillel</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="static/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="static/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap -->
  <script src="static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="static/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="static/js/adminlte.min.js"></script>
  <!-- Filterizr-->
  <script src="static/plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- Page specific script -->
  <script src="static/js/kanban.js"></script>
</body>

</html>
