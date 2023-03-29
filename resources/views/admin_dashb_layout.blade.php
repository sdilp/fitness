<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/dashboard_img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/dashboard_img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/assets/dashboard_css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/demo/demo.css" rel="stylesheet" />
  <link href="/assets/demo/demo.css" rel="stylesheet" />
  <script src="/js/app.js"></script>
  <script src="/js/bootstrap.js"></script>
  <link href="/css/app.css" rel="stylesheet">
</head>

<body class="dark-edition">
<div id="app">

<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/dashboard_img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Main Menu
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/viewDashboard">
              <i class="material-icons">dashboard</i>
              <p>Admin Dashboard</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="/admin_profile_view">
              <i class="material-icons">person</i>
              <p>Admin Profile</p>
            </a>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="/viewTrainer">
              <i class="material-icons">content_paste</i>
              <p>Trainer List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/trainer">
              <i class="material-icons">person</i>
              <p>Add Trainer</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/schedules">
              <i class="material-icons">content_paste</i>
              <p>Add Schedules</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/viewschedules">
              <i class="material-icons">content_paste</i>
              <p>Classes Schedules List</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.php">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div>
    
    @yield('content')
    
    </div>

    <script src="/js/app.js"></script>
    </body>
    </html>