<?php 

/*підключення до db.php */
  //require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
  //require "app/include/db.php";
  require($_SERVER['DOCUMENT_ROOT'] . '/app/include/db.php');
  //якщо сесії немає, то підключаємо
  if (!isset($_SESSION)) {
    session_start();
  }



//змінні - якщо існує сесія і кукі
  $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
  $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;
  
  //якщо є сесія або кукі
  if($is_session || $is_cookie){
    //то присвоюємо: 1- сесію, 2-кукі
    $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
    
    $sql = "SELECT * FROM users WHERE id=" . $userID;
    //створюємо з'єднання
    $result = mysqli_query($conn, $sql);
    //перебираємо масив
    $user = $result->fetch_assoc();
    }

    if ($user['tip'] != "admin") {
      header("Location: /index.php");
    }

    

  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Martine Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="/index.php"><img src="images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="/index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item dropdown mr-4">

            <h4>Hello!</h4>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/logout.php" >
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
